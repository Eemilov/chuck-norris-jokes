<?php

namespace Eeworld\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use Eeworld\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke'
        ]);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /**
     * @test
     */
    public function it_returns_predifined_joke()
    {
        $chuckNorrisJokes = [
            'The First rule of Chuck Norris is: you do not talk about Chuck Norris.',
            'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
            'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death.'
        ];
        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}
