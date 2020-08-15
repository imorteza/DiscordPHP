<?php

/*
 * This file is apart of the DiscordPHP project.
 *
 * Copyright (c) 2016-2020 David Cole <david.cole1340@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the LICENSE.md file.
 */

namespace Discord\Exceptions\Rest;

use Discord\Exceptions\DiscordRequestFailedException;

/**
 * Thrown when you do not have permissions to do something.
 */
class NoPermissionsException extends DiscordRequestFailedException
{
}
