<?php


namespace App\Normalizer;


use Zend\Code\Generator\InterfaceGenerator as InterfaceGeneratorAlias;
use App\Entity\Topic;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class BookNormalizer extends InterfaceGeneratorAlias
{

    private $router;
    private $normalizer;


    public function supportsNormalization($data, string $format = null, array $context = [])
    {
        return $data instanceof Topic;
    }
}