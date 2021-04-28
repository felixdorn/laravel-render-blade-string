<?php

/**
 * @param mixed[] $__data
 *
 * @return false|string
 */
function __renderBlade(string $__php, array $__data)
{
    $__data = array_merge([
        '__env' => app('view'),
    ], $__data);
    $__php = app('blade.compiler')->compileString($__php);

    $obLevel = ob_get_level();
    ob_start();
    extract($__data, EXTR_SKIP);
    try {
        // Refer to the function name
        eval('?>' . $__php);
    } catch (Throwable $e) {
        while (ob_get_level() > $obLevel) {
            ob_end_clean();
        }
        throw $e;
    }

    return ob_get_clean();
}
