<?php

namespace App\Services;

use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class LemmatizerService
{
    protected string $python;
    protected string $script;

    public function __construct()
    {
        $this->python = base_path('python/venv/Scripts/python.exe');
        $this->script = base_path('python/lemmatization_service.py');
    }

    /**
     * Lemmatize the given text using an external Python service.
     *
     * @param string $text
     * @return string
     */
    public function lemmatize(string $text): string
    {
        $process = new Process([
            $this->python,
            $this->script,
            $text
        ],
        base_path()
    );

        $process->setTimeout(60);
        $process->run();

        if(!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        return trim($process->getOutput());
    }
}