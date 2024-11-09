<?php

namespace App\Tests\Controller;

use App\Entity\Reunion;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class ReunionControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $repository;
    private string $path = '/reunion/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->repository = $this->manager->getRepository(Reunion::class);

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
        self::assertPageTitleContains('Reunion index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'reunion[date]' => 'Testing',
            'reunion[lieu]' => 'Testing',
            'reunion[sujetAbordes]' => 'Testing',
            'reunion[decision]' => 'Testing',
            'reunion[decisionprise]' => 'Testing',
            'reunion[themes]' => 'Testing',
            'reunion[encadreur]' => 'Testing',
            'reunion[dahiras]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->repository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Reunion();
        $fixture->setDate('My Title');
        $fixture->setLieu('My Title');
        $fixture->setSujetAbordes('My Title');
        $fixture->setDecision('My Title');
        $fixture->setDecisionprise('My Title');
        $fixture->setThemes('My Title');
        $fixture->setEncadreur('My Title');
        $fixture->setDahiras('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Reunion');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Reunion();
        $fixture->setDate('Value');
        $fixture->setLieu('Value');
        $fixture->setSujetAbordes('Value');
        $fixture->setDecision('Value');
        $fixture->setDecisionprise('Value');
        $fixture->setThemes('Value');
        $fixture->setEncadreur('Value');
        $fixture->setDahiras('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'reunion[date]' => 'Something New',
            'reunion[lieu]' => 'Something New',
            'reunion[sujetAbordes]' => 'Something New',
            'reunion[decision]' => 'Something New',
            'reunion[decisionprise]' => 'Something New',
            'reunion[themes]' => 'Something New',
            'reunion[encadreur]' => 'Something New',
            'reunion[dahiras]' => 'Something New',
        ]);

        self::assertResponseRedirects('/reunion/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getDate());
        self::assertSame('Something New', $fixture[0]->getLieu());
        self::assertSame('Something New', $fixture[0]->getSujetAbordes());
        self::assertSame('Something New', $fixture[0]->getDecision());
        self::assertSame('Something New', $fixture[0]->getDecisionprise());
        self::assertSame('Something New', $fixture[0]->getThemes());
        self::assertSame('Something New', $fixture[0]->getEncadreur());
        self::assertSame('Something New', $fixture[0]->getDahiras());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Reunion();
        $fixture->setDate('Value');
        $fixture->setLieu('Value');
        $fixture->setSujetAbordes('Value');
        $fixture->setDecision('Value');
        $fixture->setDecisionprise('Value');
        $fixture->setThemes('Value');
        $fixture->setEncadreur('Value');
        $fixture->setDahiras('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/reunion/');
        self::assertSame(0, $this->repository->count([]));
    }
}
