<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Dahiras extends \App\Entity\Dahiras implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'adresse' => [parent::class, 'adresse', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'encadreurs' => [parent::class, 'encadreurs', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'membres' => [parent::class, 'membres', null],
        "\0".parent::class."\0".'nom' => [parent::class, 'nom', null],
        "\0".parent::class."\0".'presences' => [parent::class, 'presences', null],
        "\0".parent::class."\0".'reunions' => [parent::class, 'reunions', null],
        'adresse' => [parent::class, 'adresse', null],
        'description' => [parent::class, 'description', null],
        'encadreurs' => [parent::class, 'encadreurs', null],
        'id' => [parent::class, 'id', null],
        'membres' => [parent::class, 'membres', null],
        'nom' => [parent::class, 'nom', null],
        'presences' => [parent::class, 'presences', null],
        'reunions' => [parent::class, 'reunions', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
