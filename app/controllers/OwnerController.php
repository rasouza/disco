<?php

class OwnerController extends BaseController {

	public function index()
    {

    }

    public function view($id)
    {
    	$nc = Nightclub::find($id);
        $votes = $nc->votes;

        $bebida = DB::select(DB::raw(
                "SELECT COUNT(v.drink_id) AS qtde, d.name
                FROM votes v
                INNER JOIN drinks d ON v.drink_id = d.id
                WHERE nightclub_id = $id
                GROUP BY drink_id
                ORDER BY qtde DESC
                LIMIT 1"
        ));

        $musica = DB::select(DB::raw(
                "SELECT COUNT(v.music_id) AS qtde, d.name
                FROM votes v
                INNER JOIN musics d ON v.music_id = d.id
                WHERE nightclub_id = $id
                GROUP BY music_id
                ORDER BY qtde DESC
                LIMIT 1"
        ));

        $publico = DB::select(DB::raw(
                "SELECT COUNT(v.public_id) AS qtde, d.name
                FROM votes v
                INNER JOIN publics d ON v.public_id = d.id
                WHERE nightclub_id = $id
                GROUP BY public_id
                ORDER BY qtde DESC
                LIMIT 1"
        ));

    	return View::make('owner.view')
            ->with('nightclub', Nightclub::find($id))
            ->with('bebida', $bebida[0]->name)
            ->with('musica', $musica[0]->name)
            ->with('publico', $publico[0]->name)
            ->with('votes', $nc->votes);
    }
}
