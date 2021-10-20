<?php

namespace App;

use App\Entity\Comment;

/**
 * Emulate API Akismet spam checking of new comment
 */
class SpamChecker
{
    public function getSpamScore(Comment $comment, array $context): int
    {
        return random_int(0, 2);
    }
}