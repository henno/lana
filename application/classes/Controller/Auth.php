<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_Template {

    public function action_index()
    {
        if( $this->request->post('username') ) {
            $username = $this->request->post('username');
            $password = $this->request->post('password');

            // Hack: repair later //todo
            Auth::instance()->force_login('demo');
            $is_logged_in = Auth::instance()->logged_in();
            if ($is_logged_in) {
                Notify::success('Success!');
                $this->redirect('Welcome');
            } else {
                Notify::error('Kasutajanimi või parool vale!');
            }
        }
    }

} // End Welcome
