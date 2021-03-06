<?php

/**
 * Display the picture of a plane if it exists
 *
 * PHP version 5
 *
 * Copyright © 2011 Mélissa Djebel
 *
 * This file is part of Galette (http://galette.tuxfamily.org).
 *
 * Plugin Pilote is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Galette. If not, see <http://www.gnu.org/licenses/>.
 *
 * @category  Plugins
 * @package   GalettePilote
 *
 * @author    Mélissa Djebel <melissa.djebel@gmx.net>
 * @copyright 2011 Mélissa Djebel
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL License 3.0 or (at your option) any later version
 * @version   0.7
 * @link      http://galette.tuxfamily.org
 * @since     Available since 0.7
 */
$avion_id = $_GET['avion_id'];
$thumb = array_key_exists('thumb', $_GET) && $_GET['thumb'] == '1';
$quick_mode = array_key_exists('quick', $_GET) && $_GET['quick'] == '1';

if ($quick_mode && is_string($avion_id)) {
    $photo_path = 'avions_photos';
    $photo_name = $avion_id . ($thumb ? '_th' : '') . '.';

    $dir = opendir($photo_path);
    while (false !== ($entry = readdir($dir))) {
        if (stripos($entry, $photo_name) === 0) {
            $ext = pathinfo($entry, PATHINFO_EXTENSION);
            header("Content-type: image/" . $ext);
            readfile($photo_path . '/' . $entry);
            break;
        }
    }
} else {
    define('GALETTE_BASE_PATH', '../../');
    require_once GALETTE_BASE_PATH . 'includes/galette.inc.php';
    require_once '_config.inc.php';

    if (!$login->isLogged()) {
        header('location: ' . GALETTE_BASE_PATH . 'index.php');
        die();
    }

    $picture = new PiloteAvionPicture($avion_id);
    if ($thumb) {
        $picture->displayThumb();
    } else {
        $picture->display();
    }
}
?>