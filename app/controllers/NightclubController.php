<?php

class NightclubController extends BaseController {

	public function index()
    {

    }

    public function viewNightclub($id)
    {
    	$nc = Nightclub::find($id);



    	return View::make('nightclub.view')
            ->with('nightclub', $nc)
            ->with('drinks', Drink::lists('name','id'))
            ->with('musics', Music::lists('name','id'))
            ->with('publics', PublicStyle::lists('name','id'));
    }

    public function rateNightclub($id)
    {
        $vote = new Vote();

        $vote->nightclub_id = $id;

        $drink = Drink::find(Input::get('drink_id'));
        $music = Music::find(Input::get('music_id'));
        $public = PublicStyle::find(Input::get('public_id'));

        $vote->drink()->associate($drink);
        $vote->music()->associate($music);
        $vote->publicStyle()->associate($public);

        $vote->ratioMF = Input::get('ratioMF');
        $vote->grade = (int)Input::get('score');
        $vote->save();

        $comment = new Comment();
        $comment->text = Input::get('comment');
        $comment->grade = 0;

        $comment->vote()->associate($vote);
        $comment->save();


        return Redirect::to('/');
    }
}
