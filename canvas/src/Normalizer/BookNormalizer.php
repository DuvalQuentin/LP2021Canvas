<?php

namespace App\Normalizer;

use App\Model\Book;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;

class BookNormalizer implements ContextAwareNormalizerInterface
{

    public function supportsNormalization($data, string $format = null, array $context = [])
    {
       return $data instanceof Book;
    }

    /**
     * @param Book $object
     * @param string|null $format
     * @param array $context
     * @return array|\ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, string $format = null, array $context = [])
    {
        return [
            'id' => $object->getId(),
            'label' => $object->getLabel(),
            'isbn' => $object->getIsbn(),
        ];
    }
}