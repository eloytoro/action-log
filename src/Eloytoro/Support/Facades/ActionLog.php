<?php namespace Eloytoro\Support\Facades;

class ActionLog {

	public static function userEvent($message, $user) {
		$log = new \Eloytoro\ActionLog\ActionLog();
		$log->text = $message;
		$log->type = "user_event";
		$log->user()->associate($user);
		$log->save();
	}

	public static function storyEvent($message, $user) {
		$log = new \Eloytoro\ActionLog\ActionLog();
		$log->text = $message;
		$log->type = "story_event";
		$log->user()->associate($user);
		$log->save();
	}

	public static function projectEvent($message, $user) {
		$log = new \Eloytoro\ActionLog\ActionLog();
		$log->text = $message;
		$log->type = "project_event";
		$log->user()->associate($user);
		$log->save();
	}

	public static function commentEvent($message, $user) {
		$log = new \Eloytoro\ActionLog\ActionLog();
		$log->text = $message;
		$log->type = "comment_event";
		$log->user()->associate($user);
		$log->save();
	}

	public static function taskEvent($message, $user) {
		$log = new \Eloytoro\ActionLog\ActionLog();
		$log->text = $message;
		$log->type = "task_event";
		$log->user()->associate($user);
		$log->save();
	}
}
