<?php

declare(strict_types=1);
/**
 * This file is part of MineAdmin.
 *
 * @link     https://www.mineadmin.com
 * @document https://doc.mineadmin.com
 * @contact  root@imoi.cn
 * @license  https://github.com/mineadmin/MineAdmin/blob/master/LICENSE
 */

namespace Mine\Interfaces\ServiceInterface;

use Mine\Interfaces\ServiceInterface\Resource\BaseResource;
use Mine\Interfaces\ServiceInterface\Resource\DataResource;

interface DataResourceServiceInterface extends BaseResource, DataResource {}