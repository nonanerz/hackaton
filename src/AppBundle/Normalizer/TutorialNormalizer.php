<?php

namespace AppBundle\Normalizer;

use AppBundle\Entity\Tutorial;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class TutorialNormalizer extends ObjectNormalizer
{
    /**
     * Normalizes an object into a set of arrays/scalars.
     *
     * @param object $object  object to normalize
     * @param string $format  format the normalization result will be encoded as
     * @param array  $context Context options for the normalizer
     *
     * @return array
     */
    public function normalize($object, $format = null, array $context = [])
    {
        if ($object instanceof Tutorial) {
            $data = [
                'id' => $object->getId(),
                'name' => $object->getName(),
                'description' => $object->getDescription(),
                'rating' => $object->getRating()
            ];

            if (isset($context['groups']) && in_array('Details', $context['groups'])) {
                $data['url'] = $object->getUrl();
            }
            return $data;
        }
        $data = [];
        foreach ($object as $item) {
            $data[] = [
                'id' => $item->getId(),
                'name' => $item->getName(),
                'description' => $item->getDescription(),
                'rating' => $item->getRating()
            ];
        }


        return $data;
    }

    /**
     * Checks whether the given class is supported for normalization by this normalizer.
     *
     * @param mixed  $data   Data to normalize
     * @param string $format The format being (de-)serialized from or into
     *
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof Tutorial) {
            return true;
        }

        return false;
    }
}
