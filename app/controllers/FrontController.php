<?php

use dflydev\markdown\MarkdownParser;

class FrontController extends BaseController {

	public function index()
	{	
		$user = Auth::user();
		//filtering
		$tasks = $user->tasks()->get();
		//Fix markdown
		foreach($tasks as $tid=>$task){
			$task_details_markdown = new MarkdownParser();
			$task_notes_markdown = new MarkdownParser();
			$task_details_markdown_html = $task_details_markdown->transformMarkdown($task->details);
			$task_notes_markdown_html = $task_notes_markdown->transformMarkdown($task->notes);
			$tasks[$tid]->details_html = $task_details_markdown_html;
			$tasks[$tid]->notes_html = $task_notes_markdown_html;
		}

		return View::make('front/tasks',array(
            'tasks' => $tasks, 
        ));
	}

}