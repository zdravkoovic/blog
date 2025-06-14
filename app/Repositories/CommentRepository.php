<?php

namespace App\Repositories;

use App\Models\Comment;
use App\Repositories\Interfaces\ICommentRepository;

class CommentRepository implements ICommentRepository
{
    public function delete(int $id) : int
    {
        try {
            return Comment::destroy($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}