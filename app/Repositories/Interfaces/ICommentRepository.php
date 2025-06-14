<?php

namespace App\Repositories\Interfaces;

interface ICommentRepository
{
    public function delete(int $id) : int;
}