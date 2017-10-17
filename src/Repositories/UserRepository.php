<?php

namespace Elc\User\Repositories;

use Elc\User\Models\User;

interface UserRepository
{
	// put just methods to make things done
    public function getAll();
    public function getById($id);
    public function create(array $attributes);
    public function update($id, array $attributes);
    public function delete($id);
}
