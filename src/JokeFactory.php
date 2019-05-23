<?php

namespace Eeworld\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'The First rule of Chuck Norris is: you do not talk about Chuck Norris.',
        'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
        'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death.',
    ];

    public function __construct(array $jokes = null)
    {
        if (! empty($jokes)) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
