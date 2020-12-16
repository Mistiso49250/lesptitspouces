<?php
declare(strict_types=1);

namespace Oc\Tools;

use Twig\TwigFilter;

class TwigExtention extends \Twig\Extension\AbstractExtension
{
    public function getFilters()
    {
        // Exemple
        // return [new TwigFilter('badge', [$this, 'badgeFilter'], ['is_safe' =>['html']]),
        // new TwigFilter('booleanBadge', [$this, 'booleanBadgeFilter'], ['is_safe' =>['html']])
        // ];

        return [
            new TwigFilter('hasFlashes', [$this, 'hasFlashes']),
            new TwigFilter('getFlashes', [$this, 'getFlashes'])
        ];
    }

    // {{ prenom | badge }}
    // {{ "Nom" | badge({'color': 'danger', 'rounded': true}) }}
    // public function badgeFilter($content, array $options = []) : string
    // {
    //     $defaultOption = [
    //         'color' => 'primary',
    //         'rounded' => false
    //     ];

    //     $options = array_merge($defaultOption, $options);

    //     $color = $options['color'];
    //     $pill = $options['rounded'] ? " badge-pill" : "";

    //     $template = '<span class="badge badge-%s %s">%s</span>';

    //     return sprintf($template, $color, $pill, $content);
    // }

    // Exemple
    // {{ adulte | booleanBadge }}
    // public function booleanBadgeFilter(bool $content, $options) : string
    // {

    //     $defaultOptions = [
    //         'trueText' => 'oui',
    //         'falseText' => 'non'
    //     ];

    //     $options = array_merge($defaultOptions, $options);

    //     if($content){
    //         return $this->badgeFilter($options['trueText']);
    //     }
    //     else{
    //         return $this->badgeFilter($options['falseText']);
    //     }
    // }

    public function hasFlashes()
    {
        
    }

    public function getFlashes()
    {

    }


}