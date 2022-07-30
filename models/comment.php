<?php
    require_once('connection.php');

    class comment_db {

        static function get_comment()
        {
            $db = getConnection();
            $result = $db->query("SELECT 
            comment.id AS id,
            comment.date AS date,
            comment.block AS block,
            comment.content AS content,
            comment.news_id AS news_id,
            comment.user_id AS user_id,
            news.title AS title,
            user.name AS name,
            comment.parent_comment AS parent_comment
            FROM comment, user, news WHERE news_id = news.id AND user_id = user.id ORDER BY date");
            return $result;
        }

        static function get_comment_news($id)
        {
            $db = getConnection();
            $result = $db->query("SELECT 
            comment.id AS id,
            comment.date AS date,
            comment.block AS block,
            comment.content AS content,
            comment.news_id AS news_id,
            comment.user_id AS user_id,
            news.title AS title,
            user.name AS name,
            user.img AS img,
            comment.parent_comment AS parent_comment
            FROM comment, user, news WHERE news_id = news.id AND user_id = user.id AND news_id = $id AND parent_comment IS NULL ORDER BY date");
            return $result;
        }

        static function get_reply_comment_news($id) {
            $db = getConnection();
            $result = $db->query("SELECT 
            comment.id AS id,
            comment.date AS date,
            comment.block AS block,
            comment.content AS content,
            comment.news_id AS news_id,
            comment.user_id AS user_id,
            news.title AS title,
            user.name AS name,
            user.img AS img,
            comment.parent_comment AS parent_comment
            FROM comment, user, news WHERE news_id = news.id AND user_id = user.id AND parent_comment = $id ORDER BY date");
            return $result;
        }

        static function get_comment_product($id)
        {
            $db = getConnection();
            $result = $db->query("SELECT 
            comment.id AS id,
            comment.date AS date,
            comment.block AS block,
            comment.content AS content,
            comment.product_id AS product_id,
            comment.user_id AS user_id,
            product.name AS name_product,
            user.name AS name,
            user.img AS img,
            comment.parent_comment AS parent_comment
            FROM comment, user, product WHERE product_id = product.id AND user_id = user.id AND product_id = $id AND parent_comment IS NULL ORDER BY date");
            return $result;
        }

        static function get_reply_comment_product($id) {
            $db = getConnection();
            $result = $db->query("SELECT 
            comment.id AS id,
            comment.date AS date,
            comment.block AS block,
            comment.content AS content,
            comment.product_id AS product_id,
            comment.user_id AS user_id,
            product.name AS name_product,
            user.name AS name,
            user.img AS img,
            comment.parent_comment AS parent_comment
            FROM comment, user, product WHERE product_id = product.id AND user_id = user.id AND parent_comment = $id");
            return $result;
        }

        static function get_comment_user($user_id)
        {
            $db = getConnection();
            $result = $db->query("SELECT 
            comment.id AS id,
            comment.date AS date,
            comment.block AS block,
            comment.content AS content,
            comment.news_id AS news_id,
            comment.product_id AS product_id,
            comment.user_id AS user_id,
            user.name AS name,
            comment.parent_comment AS parent_comment
            FROM comment, user WHERE user_id = user.id AND user_id = $user_id ORDER BY comment.date");
            return $result;
        }

        static function insert_news($content, $news_id, $user_id) {
            $db = getConnection();
            $date = date("Y-m-d H:i:s");
            $result = $db->query("INSERT INTO comment (date, block, content, news_id, user_id)
            VALUES ('$date', 0, '$content', $news_id, $user_id)");
            return $result;
        }

        static function insert_product($content, $product_id, $user_id) {
            $db = getConnection();
            $date = date("Y-m-d H:i:s");
            $result = $db->query("INSERT INTO comment (date, block, content, product_id, user_id)
            VALUES ('$date', 0, '$content', $product_id, $user_id)");
            return $result;
        }

        static function reply_news($id, $content, $news_id, $user_id) {
            $db = getConnection();
            $date = date("Y-m-d H:i:s");
            $result = $db->query("INSERT INTO comment (date, block, content, news_id, user_id, parent_comment)
            VALUES ('$date', 0, '$content', $news_id, $user_id, $id)");
            return $result;
        }

        static function reply_product($id, $content, $product_id, $user_id) {
            $db = getConnection();
            $date = date("Y-m-d H:i:s");
            $result = $db->query("INSERT INTO comment (date, block, content, product_id, user_id, parent_comment)
            VALUES ('$date', 0, '$content', $product_id, $user_id, $id)");
            return $result;
        }

        static function show($id) {
            $db = getConnection();
            $result = $db->query("UPDATE comment SET block = 0 WHERE id = $id");
            return $result;
        }

        static function hide($id) {
            $db = getConnection();
            $result = $db->query("UPDATE comment SET block = 1 WHERE id = $id");
            return $result;
        }

        static function delete($id) {
            $db = getConnection();
            $result = $db->query("DELETE FROM comment WHERE id = $id;");
            return $result;
        }

        static function delete_child($id) {
            $db = getConnection();
            $result = $db->query("DELETE FROM comment WHERE parent_comment = $id;");
            return $result;
        }

    }