<?php
class Subscriber implements Observer
{
    public function update(Subject $subject)
    {
        echo "The book " . $subject->title . " by " . $subject->author . " is now available for " . $subject->price . " dollars.<br>";
    }
}