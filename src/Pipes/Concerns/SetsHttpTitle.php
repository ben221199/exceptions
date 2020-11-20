<?php

declare(strict_types=1);

namespace LaravelJsonApi\Exceptions\Pipes\Concerns;

use Illuminate\Http\Response;
use Illuminate\Contracts\Translation\Translator;

trait SetsHttpTitle
{

    /**
     * @var Translator
     */
    private Translator $translator;

    /**
     * @param int|null $status
     * @return string|null
     */
    private function getTitle(?int $status): ?string
    {
        if ($status && isset(Response::$statusTexts[$status])) {
            return $this->translator->get(Response::$statusTexts[$status]);
        }

        return null;
    }
}
