<?php
    require_once('connection.php');

    class news_db {

        static function getAll()
        {
            $db = getConnection();
            $result = $db->query("SELECT * FROM news ORDER BY date DESC");
            return $result;
        }

        static function getAll_show()
        {
            $db = getConnection();
            $result = $db->query("SELECT * FROM news WHERE block = 0 ORDER BY date DESC");
            return $result;
        }

        static function getAll_show_lastest()
        {
            $db = getConnection();
            $result = $db->query("SELECT * FROM news WHERE block = 0 ORDER BY date DESC");
            return $result;
        }

        static function get_news_id($id) {
            $db = getConnection();
            $result = $db -> query("SELECT * FROM news WHERE id = $id");
            return $result;
        }

        static function show($id) {
            $db = getConnection();
            $result = $db->query("UPDATE news SET block = 0 WHERE id = $id");
            return $result;
        }

        static function hide($id) {
            $db = getConnection();
            $result = $db->query("UPDATE news SET block = 1 WHERE id = $id");
            return $result;
        }

        static function delete($id) {
            $db = getConnection();
            $result = $db->query("DELETE FROM news WHERE id = $id;");
            return $result;
        }

        static function insert($title, $content, $img) {
            $db = getConnection();
            $date = date("Y-m-d H:i:s");
            $result = $db->query("INSERT INTO `news` (block, date, title, content, img)
            VALUES (0, '$date', '$title', '$content', '$img')");
            return $result;
        }

        static function update($id, $title, $content, $img) {
            $db = getConnection();
            $result = $db->query("UPDATE news
            SET title = '$title', content = '$content', img = '$img'
            WHERE id = $id");
            return $result;
        }

        static function update_noImg($id, $title, $content) {
            $db = getConnection();
            $result = $db->query("UPDATE news
            SET title = '$title', content = '$content'
            WHERE id = $id");
            return $result;
        }
    }