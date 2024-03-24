<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users as ModelsUsers;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    public function profil()
    {
        $method = $this->request->getMethod(true);

        $userModel = new ModelsUsers();

        $user = $userModel->find(session()->get('user.id'));

        $this->data['user'] = $user;

        if ($method == 'POST') {
            $data = $this->request->getPost();

            $rules = [
                'first_name' => 'required|min_length[3]|max_length[150]',
                'last_name' => 'required|min_length[3]|max_length[150]',
            ];

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            $file = $this->request->getFile('image');

            if (isset($file) && $file->isValid()) {
                $fileName = $file->getRandomName();

                if ($file->move('uploads', $fileName)) {
                    $data['image'] = $fileName;

                    session()->set('user.image', $fileName);
                }
            }

            if (!$userModel->update($user->id, $data)) {
                return redirect()->back()->withInput()->with('errors', $userModel->errors());
            }

            session()->set('user.last_name', $data['last_name']);
            session()->set('user.first_name', $data['first_name']);

            return redirect()->back()->with('success', ['Vos informations ont bien été enregistrées']);
        }
        return view('users/profil', $this->data);
    }
}
