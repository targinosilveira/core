<?php
/**
* ownCloud - user notifications
*
* @author Florian Hülsmann
* @copyright 2012 Florian Hülsmann <fh@cbix.de>
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either
* version 3 of the License, or any later version.
*
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*
* You should have received a copy of the GNU Affero General Public
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
*
*/

$l = OC_L10N::get('notify');
OC::$CLASSPATH['OC_Notify'] = 'apps/notify/lib/notify.php';
OCP\App::register( array( 'order' => 3, 'id' => 'notify', 'name' => $l->t('Notifications') ));
OCP\Util::addScript( 'notify', 'notifications' );
OCP\Util::addStyle( 'notify', 'notifications' );