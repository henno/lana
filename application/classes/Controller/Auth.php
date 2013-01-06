<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template {
    public $template = 'templates/public';
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
                $this->redirect('welcome');
            } else {
                Notify::error('Kasutajanimi või parool vale!');
            }
        }
    }
    public function action_logout()
    {
        Auth::instance()->logout();
        $this->redirect('auth');
    }

} // End Welcome
