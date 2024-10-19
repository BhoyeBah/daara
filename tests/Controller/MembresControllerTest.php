<?php

namespace App\Tests\Controller;

use App\Entity\Membres;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class MembresControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $repository;
    private string $path = '/membres/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->repository = $this->manager->getRepository(Membres::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Membre index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'membre[nom]' => 'Testing',
            'membre[prenom]' => 'Testing',
            'membre[telephone]' => 'Testing',
            'membre[adresse]' => 'Testing',
            'membre[email]' => 'Testing',
            'membre[specialite]' => 'Testing',
            'membre[dahiras]' => 'Testing',
            'membre[encadreur]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->repository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Membres();
        $fixture->setNom('My Title');
        $fixture->setPrenom('My Title');
        $fixture->setTelephone('My Title');
        $fixture->setAdresse('My Title');
        $fixture->setEmail('My Title');
        $fixture->setSpecialite('My Title');
        $fixture->setDahiras('My Title');
        $fixture->setEncadreur('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Membre');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Membres();
        $fixture->setNom('Value');
        $fixture->setPrenom('Value');
        $fixture->setTelephone('Value');
        $fixture->setAdresse('Value');
        $fixture->setEmail('Value');
        $fixture->setSpecialite('Value');
        $fixture->setDahiras('Value');
        $fixture->setEncadreur('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'membre[nom]' => 'Something New',
            'membre[prenom]' => 'Something New',
            'membre[telephone]' => 'Something New',
            'membre[adresse]' => 'Something New',
            'membre[email]' => 'Something New',
            'membre[specialite]' => 'Something New',
            'membre[dahiras]' => 'Something New',
            'membre[encadreur]' => 'Something New',
        ]);

        self::assertResponseRedirects('/membres/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getPrenom());
        self::assertSame('Something New', $fixture[0]->getTelephone());
        self::assertSame('Something New', $fixture[0]->getAdresse());
        self::assertSame('Something New', $fixture[0]->getEmail());
        self::assertSame('Something New', $fixture[0]->getSpecialite());
        self::assertSame('Something New', $fixture[0]->getDahiras());
        self::assertSame('Something New', $fixture[0]->getEncadreur());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Membres();
        $fixture->setNom('Value');
        $fixture->setPrenom('Value');
        $fixture->setTelephone('Value');
        $fixture->setAdresse('Value');
        $fixture->setEmail('Value');
        $fixture->setSpecialite('Value');
        $fixture->setDahiras('Value');
        $fixture->setEncadreur('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/membres/');
        self::assertSame(0, $this->repository->count([]));
    }
}
