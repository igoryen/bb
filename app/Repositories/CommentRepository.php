<?php
namespace App\Repositoies;

use App\User;

class CommentRepository {
	public function forUser(User $user) {
		return $user->tasks()->orderBy('created_at', 'asc')->get();
	}
} 
