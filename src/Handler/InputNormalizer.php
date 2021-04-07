<?php


namespace App\Handler;

use App\Model\InputLine;
use App\Repository\ProductRepository;
use Psr\Log\LoggerInterface;

final class InputNormalizer
{
    private ProductRepository $productRepository;

    private LoggerInterface $logger;

    public function __construct(ProductRepository $productRepository, LoggerInterface $logger)
    {
        $this->productRepository = $productRepository;
        $this->logger = $logger;
    }

    /**
     * @return array<InputLine>
     */
    public function __invoke(string $input): array
    {
        $products = $this->productRepository->findForInputParse();
        $pattern = '/' . implode('|', array_keys($products)) . '/';

        $parsedInput = [];

        foreach (preg_split("/\r\n|\n|\r/", $input) as $line) {
            $inputLine = new InputLine($line);

            if (\preg_match($pattern, $inputLine->normalizeText(), $matches) > 0) {
                $inputLine->linePosition = $products[$matches[0]];
            } else {
                $this->logger->warning($line . ' : Not found');
            }


            $parsedInput[] = $inputLine;
        }

        return $parsedInput;
    }
}
