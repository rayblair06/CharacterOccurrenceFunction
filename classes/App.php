<?php


class App {
    public $path = 'task1.txt';
    public $input;
    public $wordTotal;
    public $uniqueWords;
    public $chrCount = array();
    public $wrdCount = array();
    public $tmpCount = array();

    // Load File Path
    public function __construct()
    {
        $this->input = file_get_contents($this->path);
    }

    // Push input into array then count all the unique words
    public function wordCount()
    {
        $this->wordTotal = str_word_count(strtolower($this->input), 1);
        $this->uniqueWords = array_count_values($this->wordTotal);

    }

    // Takes the array then counts the characters for each unique word, multiplying by repeated amount associated within array
    public function charCount()
    {
        while($this->wrdCount = current($this->uniqueWords))
        {
            $this->tmpCount = count_chars(key($this->uniqueWords), 1);

            foreach ($this->tmpCount as $key => $val)
            {
                if(ctype_alpha($key)) {
                    $this->chrCount[$key] = $this->chrCount[$key] + $val * $this->wrdCount;
                } else {
                    continue;
                }

            }

            next($this->uniqueWords);

        };

        arsort($this->chrCount, 1);

        return $this->chrCount;
    }

}