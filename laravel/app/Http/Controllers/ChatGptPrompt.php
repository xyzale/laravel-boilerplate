<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class ChatGptPrompt extends Controller
{
    public function index(): View
    {
        return view('chatgpt-prompt');
    }

    public function generaPrompt(Request $request)
    {
        App::setLocale('it');

        $prompt = __('prompt.base', ['agiscicome' => $request->get('variabile_agisci')]);

        if ($request->has('html')) {
            $prompt .= __('prompt.html');
        }

        $argomento = $request->get('variabile_argomento') ? $request->get('variabile_argomento') : __('prompt.argomento-placeholder');
        $titolo = $request->get('variabile_titolo') ? $request->get('variabile_titolo') :  __('prompt.titolo-placeholder');
        $prompt .= __('prompt.argomento', ['argomento' => $argomento, 'titolo' => $titolo]);

        $prompt .= __('prompt.pubblico', ['pubblico' => $request->get('variabile_pubblico'), 'obiettivo' => $request->get('variabile_obiettivo')]);

        if ((int) $request->get('variabile_H2') > 0) {
            $prompt .= __('prompt.h2', ['numh2' => $request->get('variabile_H2')]);
        }
        if ((int) $request->get('variabile_H3') > 0) {
            $prompt .= __('prompt.h3', ['numh3' => $request->get('variabile_H3')]);
        }

        $prompt .= __('prompt.allsections');

        if (!$request->has('html')) {
            $prompt .= __('prompt.markdown');
        }

        $prompt .= __('prompt.stile', [
           'stile' => $request->get('variabile_stile'),
           'sentiment' => $request->get('variabile_sentiment'),
           'registro'  => $request->get('variabile_registro')
        ]);

        if ($request->has('puntato')) {
            $prompt .= __('prompt.puntato');
        }

        if ($request->has('numerato')) {
            $prompt .= __('prompt.numerato');
        }

        if ($request->has('ottimizza')) {
            $keyword = $request->get('variabile_keyword');

            if ($keyword) {
                $prompt .= __('prompt.keyword', ['keyword' => $keyword]);

                if ($request->has('keyword_correlate')) {
                    $prompt .= __('prompt.correlate', ['keyword' => $keyword]);
                }

                if ($request->has('entita_correlate')) {
                    $prompt .= __('prompt.entita-correlate', ['keyword' => $keyword]);
                }
            } else {
                $prompt .= __('prompt.ottimizzazione-generica');
            }
        }

        if ($request->has('fonti')) {
            $prompt .= __('prompt.fonti');
        }

        if ($request->has('meta')) {
            $prompt .= __('prompt.meta');
        }

        if ($request->has('informazioni')) {
            if ($request->get('testo-informazioni')) {
                $prompt .= __('prompt.extra', ['extra' => $request->get('testo-informazioni')]);
            } else {
                $prompt .= __('prompt.extra-placeholder');
            }
        }

        dd($prompt);
        dd($request->all());
    }
}
