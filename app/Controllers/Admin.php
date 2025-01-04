<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use App\Models\MilestoneModel;
use App\Models\KontakModel;
use App\Models\FaqModel;
use App\Models\CourseModel;
use App\Models\SubCourseModel;
use App\Models\TeamModel;
use App\Models\PortofolioModel;
use App\Models\KlienModel;
use App\Models\ArtikelModel;
use App\Models\UsersModel;
use App\Models\PembayaranModel;

class Admin extends BaseController
{
    protected $validation;
    protected $ProfileModel;
    protected $MilestoneModel;
    protected $KontakModel;
    protected $FaqModel;
    protected $CourseModel;
    protected $SubCourseModel;
    protected $TeamModel;
    protected $PortofolioModel;
    protected $KlienModel;
    protected $ArtikelModel;
    protected $UsersModel;
    protected $PembayaranModel;
    protected $user;
    
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->ProfileModel = new ProfileModel();
        $this->MilestoneModel = new MilestoneModel();
        $this->KontakModel = new KontakModel();
        $this->FaqModel = new FaqModel();
        $this->CourseModel = new CourseModel();
        $this->SubCourseModel = new SubCourseModel();
        $this->TeamModel = new TeamModel();
        $this->PortofolioModel = new PortofolioModel();
        $this->KlienModel = new KlienModel();
        $this->ArtikelModel = new ArtikelModel();
        $this->UsersModel = new UsersModel();
        $this->PembayaranModel = new PembayaranModel();
        $this->user =  $this->UsersModel->where('email', session()->get('swevel_email'))->first();
    }
    public function index()
    {

        $data = [
            'user' => $this->user,
            'title' => 'Dashboard'
        ];
        return view('swevel/admin/dashboard', $data);
    }

    public function aboutus()
    {
        $data = [
            'user' => $this->user,
            'title' => 'About Us'
        ];
        return view('swevel/admin/admin-about-us', $data);
    }


    // -----------------Kelola Artikel-----------------
    // -------------------------------------------------

    public function daftar_artikel()
    {
        $artikel = $this->ArtikelModel->findAll();
        $data = [
            'title' => 'Daftar Artikel',
            'artikel' => $artikel,
            'user' => $this->user,
        ];
        return view('swevel/admin/artikel/daftar-artikel', $data);
    }

    public function tambah_artikel()
    {
        $data = [
            'user' => $this->user,
            'title' => 'Tambah Artikel',
            'validation' => $this->validation,
        ];
        return view('swevel/admin/artikel/tambah-artikel', $data);
    }
    public function edit_artikel($slug)
    {

        $data = [
            'user' => $this->user,
            'title' => 'Edit Artikel',
            'artikel' => $this->ArtikelModel->where('slug', $slug)->first(),
            'validation' => $this->validation,
        ];
        return view('swevel/admin/artikel/edit-artikel', $data);
    }
    public function hapus_artikel()
    {
        $id = $this->request->getVar('id');
        $artikel = $this->ArtikelModel->find($id);
        $file_lama = 'img/artikel/' . $artikel['poster'];
        if (file_exists($file_lama)) {
            unlink($file_lama);
        }
        $hapus = $this->ArtikelModel->delete($id);
        if ($hapus) {
            session()->setFlashdata('message', 'Data berhasil dihapus');
        } else {
            session()->setFlashdata('message', 'Data gagal dihapus');
        }
        return redirect()->to('/admin-artikel');
    }

    public function article()
    {
        $data = [
            'user' => $this->user,
            'title' => 'Artikel',
        ];
        return view('swevel/admin/admin-artikel', $data);
    }
    public function simpanArtikel()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul Tidak boleh kosong'
                ]
            ],
            'isi_artikel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'isi artikel Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png,image/svg/]|max_size[berkas,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png,svg',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            return redirect()->back()->withInput();
        }

        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getRandomName();
        $judul = $this->request->getVar('judul');
        $slug = str_replace(' ', '-', $judul);
        $this->ArtikelModel->insert([
            'judul' => htmlspecialchars($judul),
            'slug' => $slug,
            'isi_artikel' => $this->request->getVar('isi_artikel'),
            'poster' => $fileName,
            'status' => '1'
        ]);
        $dataBerkas->move('img/artikel/', $fileName);
        session()->setFlashdata('message', 'Data Artikel Berhasil di Upload');
        return redirect('admin-artikel');
    }
    public function updateArtikel($id)
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul Tidak boleh kosong'
                ]
            ],
            'isi_artikel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'isi artikel Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png,image/svg/]|max_size[berkas,2048]',
                'errors' => [
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png,svg',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            return redirect()->back()->withInput();
        }

        $dataBerkas = $this->request->getFile('berkas');
        if ($dataBerkas->getError() == 4) {
            $fileName = $this->request->getVar('file_lama');
        } else {
            $fileName = $dataBerkas->getRandomName();
            $dataBerkas->move('img/artikel/', $fileName);
            unlink('img/artikel/' . $this->request->getVar('file_lama'));
        }
        $judul = $this->request->getVar('judul');
        $slug = str_replace(' ', '-', $judul);
        $data = [
            'user' => $this->user,
            'judul' => htmlspecialchars($judul),
            'slug' => $slug,
            'isi_artikel' => $this->request->getVar('isi_artikel'),
            'poster' => $fileName,
            'status' => '1'
        ];
        $update = $this->ArtikelModel->update($id, $data);
        if ($update) {
            session()->setFlashdata('message', 'Data Artikel Berhasil di Upload');
        } else {
            session()->setFlashdata('message', 'Data Artikel Gagal di Upload');
        }
        return redirect('admin-artikel');
    }

    // End Kelola Artikel

    public function event()
    {
        $data = [
            'user' => $this->user,
            'title' => 'Event',
        ];
        return view('swevel/admin/admin-event', $data);
    }
    public function moreEvent()
    {
        $data = [
            'user' => $this->user,
            'title' => 'More Event',
        ];
        return view('swevel/admin/admin-more-event', $data);
    }
    // admin portofolio
    public function portofolio()
    {
        $data = [
            'user' => $this->user,
            'title' => 'Portofolio',
            'portofolio' => $this->PortofolioModel->select('gambar as image, judul, id')->findAll(),
            'validation' => $this->validation,
        ];

        return view('swevel/admin/admin-portofolio', $data);
        
    }
    public function addPortofolio()
{
    $validationRules = [
        'judul' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Judul harus diisi',
            ],
        ],
        'berkas' => [
            'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
            'errors' => [
                'uploaded' => 'Harus ada file yang diupload',
                'mime_in' => 'File ekstensi harus berupa jpg, jpeg, gif, atau png',
                'max_size' => 'Ukuran file maksimal 2 MB',
            ],
        ],
    ];

    if (!$this->validate($validationRules)) {
        return redirect()->back()->withInput()
            ->with('validation', $this->validator);
    }

    $file = $this->request->getFile('berkas');
    $fileName = $file->getRandomName();
    $file->move('img/portofolio/', $fileName);

    $this->PortofolioModel->insert([
        'judul' => htmlspecialchars($this->request->getVar('judul')),
        'gambar' => $fileName,
    ]);

    session()->setFlashdata('message', 'Data portofolio berhasil di-upload.');
    return redirect('admin-portofolio');
}

public function updatePortofolio()
{
    $validationRules = [
        'judul' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Judul harus diisi',
            ],
        ],
        'berkas' => [
            'rules' => 'mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
            'errors' => [
                'mime_in' => 'File ekstensi harus berupa jpg, jpeg, gif, atau png',
                'max_size' => 'Ukuran file maksimal 2 MB',
            ],
        ],
    ];

    if (!$this->validate($validationRules)) {
        return redirect()->back()->withInput()
            ->with('validation', $this->validator);
    }

    $id = $this->request->getVar('id');
    $file = $this->request->getFile('berkas');
    $fileName = $this->request->getVar('file_old');

    if ($file && !$file->hasMoved() && $file->isValid()) {
        $fileName = $file->getRandomName();
        $file->move('img/portofolio/', $fileName);

        // Delete old file if exists
        $oldFilePath = 'img/portofolio/' . $this->request->getVar('file_old');
        if (file_exists($oldFilePath)) {
            unlink($oldFilePath);
        }
    }

    $this->PortofolioModel->update($id, [
        'judul' => htmlspecialchars($this->request->getVar('judul')),
        'gambar' => $fileName,
    ]);

    session()->setFlashdata('message', 'Data portofolio berhasil di-update.');
    return redirect('admin-portofolio');
}

public function deletePortofolio()
{
    $id = $this->request->getVar('id_portofolio');
    $oldFileName = $this->request->getVar('old_file');

    if ($oldFileName) {
        $filePath = 'img/portofolio/' . $oldFileName;

        // Pastikan filePath adalah file dan bukan direktori
        if (is_file($filePath) && file_exists($filePath)) {
            unlink($filePath);
        }
    }

    if ($this->PortofolioModel->delete($id)) {
        session()->setFlashdata('message', 'Data portofolio berhasil dihapus.');
    } else {
        session()->setFlashdata('message', 'Data portofolio gagal dihapus.');
    }

    return redirect('admin-portofolio');
}


    // end admin portofolio

    // admin klien
    public function klien()
    {
        $data = [
            'user' => $this->user,
            'title' => 'Klien',
            'klien' => $this->KlienModel->findAll(),
            'validation' => $this->validation,
        ];
        return view('swevel/admin/admin-klien', $data);
    }
    public function add_klien()
    {
        if (!$this->validate([
            'berkas' => [
                'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');

            return redirect()->back()->withInput();
        }

        // $berkas = new BerkasModel();
        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getRandomName();
        $this->KlienModel->insert([
            'gambar' => $fileName,
        ]);
        $dataBerkas->move('img/klien/', $fileName);
        session()->setFlashdata('message', 'Data klien Berhasil di Upload');
        session()->setFlashdata('message1', 'Success');
        return redirect('admin-klien');
    }
    public function delete_klien()
    {
        $id = $this->request->getVar('id_portofolio');
        unlink('img/klien/' . $this->request->getVar('old_file'));
        $delete = $this->KlienModel->delete($id);
        if ($delete) {
            session()->setFlashdata('message', 'data klien berhasil di hapus');
            session()->setFlashdata('message1', 'Success');
        } else {
            session()->setFlashdata('message', 'data klien gagal di hapus');
            session()->setFlashdata('message1', 'Error');
        }
        return redirect('admin-klien');
    }

    // end admin klien



    // profile
    public function profile()
    {
        $data = [
            'user' => $this->user,
            'title' => 'profile',
            'profile' => $this->ProfileModel->findAll(),
        ];
        return view('swevel/admin/admin-profile', $data);
    }
    public function editProfile($id)
    {
        $profile = $this->ProfileModel->find($id);
        $data = [
            'user' => $this->user,
            'title' => "edit profile " . $profile['title'],
            'profile' => $profile,
        ];
        return view('swevel/admin/admin-profile-edit', $data);
    }
    public function updateProfile($id)
    {
        if (!$this->validate([
            'title' =>  [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul harus diisi',
                ]
            ],
            'description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi',
                ]
            ],

        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            // session()->setFlashdata('error_add_kontak', 'error');
            return redirect()->back()->withInput();
        } else {
            $data = [
                'user' => $this->user,
                'title' => $this->request->getVar('title'),
                'description' => $this->request->getVar('description'),
            ];
            $this->ProfileModel->update($id, $data);
            session()->setFlashdata('message', 'data ' . $this->request->getVar('title') . ' berhasil di update');
            return redirect('profile');
        }
    }

    public function deleteProfile()
    {
        dd($this->request->getVar());
    }


    // Milestone
    public function milestone()
    {
        $data = [
            'user' => $this->user,
            'title' => 'Milestone',
            'milestone' => $this->MilestoneModel->orderBy('year', 'asc')->findAll(),
        ];
        return view('swevel/admin/admin-milestone', $data);
    }
    public function addMilestone()
    {
        $data = [
            'user' => $this->user,
            'title' => 'Add Milestone',
            'validation' => $this->validation,
        ];
        return view('swevel/admin/admin-milestone-add', $data);
    }
    public function editMilestone($id)
    {
        $milestone = $this->MilestoneModel->find($id);
        $data = [
            'user' => $this->user,
            'title' => 'Edit Milestone',
            'validation' => $this->validation,
            'milestone' => $milestone,
        ];
        return view('swevel/admin/admin-milestone-edit', $data);
    }
    public function saveMilestone()
    {
        if (!$this->validate([
            'year' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tahun Tidak boleh kosong'
                ]
            ],
            'description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        // $berkas = new BerkasModel();
        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getRandomName();
        $this->MilestoneModel->insert([
            'image' => $fileName,
            'year' => $this->request->getVar('year'),
            'description' => $this->request->getVar('description')
        ]);
        $dataBerkas->move('img/milestone/', $fileName);
        session()->setFlashdata('message', 'Data Milestone Berhasil di Upload');
        return redirect('admin-milestone');
    }
    public function updateMilestone($id)
    {
        if (!$this->validate([
            'year' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tahun Tidak boleh kosong'
                ]
            ],
            'description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
                'errors' => [
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        // $berkas = new BerkasModel();
        $dataBerkas = $this->request->getFile('berkas');

        if ($dataBerkas->getError() == 4) {
            $fileName = $this->request->getVar('file_old');
        } else {
            $fileName = $dataBerkas->getRandomName();
            $dataBerkas->move('img/milestone/', $fileName);
            unlink('img/milestone/' . $this->request->getVar('file_old'));
        }
        $data = [
            'user' => $this->user,
            'image' => $fileName,
            'year' => $this->request->getVar('year'),
            'description' => $this->request->getVar('description')
        ];
        $this->MilestoneModel->update($id, $data);
        session()->setFlashdata('message', 'Data Milestone Berhasil di Upload');
        return redirect('admin-milestone');
    }
    public function deleteMilestone($id)
    {
        $milestone = $this->MilestoneModel->find($id);
        unlink('img/milestone/' . $milestone['image']);
        $delete = $this->MilestoneModel->delete($id);
        if ($delete) {
            session()->setFlashdata('message', 'data milestone berhasil di hapus');
        } else {
            session()->setFlashdata('message', 'data milestone gagal di hapus');
        }
        return redirect('admin-milestone');
    }

    // Kontak
    public function kontak()
    {
        $data = [
            'user' => $this->user,
            'title' => 'Kontak',
            'kontak' => $this->KontakModel->findAll(),
            'validation' => $this->validation,

        ];
        return view('swevel/admin/admin-kontak', $data);
    }
    public function addKontak()
    {
        if (!$this->validate([
            'kontak' => [
                'rules' => 'required|is_unique[kontak.name]',
                'errors' => [
                    'required' => 'Pilih salah satu kontak',
                    'is_unique' => 'Data sudah ada, silahkan pilih kontak lain',
                ]
            ],
            'number_link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'isikan nomor atau link'
                ]
            ],
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            return redirect()->back()->withInput();
        }

        $kontak = $this->request->getVar('kontak');

        if ($kontak == 'phone' || $kontak == 'envelope' || $kontak == 'location-dot') {
            $icon = '<i class="fa-solid fa-' . $kontak . '"></i>';
        } else {
            $icon = '<i class="fa-brands fa-' . $kontak . '"></i>';
        }

        $data = [
            'user' => $this->user,
            'name' => $kontak,
            'description' => htmlspecialchars($this->request->getVar('number_link')),
            'icon' => $icon,
        ];
        $insert = $this->KontakModel->insert($data);
        if ($insert) {
            session()->setFlashdata('message', 'Data kontak berhasil di publish');
            session()->setFlashdata('message1', 'success');
        } else {
            session()->setFlashdata('message', 'Data kontak gagal di publish');
            session()->setFlashdata('message1', 'Error');
        }
        return redirect('admin-kontak');
    }
    public function updateKontak()
    {
        if (!$this->validate([
            'edit_number_link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'isikan nomor atau link'
                ]
            ],
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            return redirect()->back()->withInput();
        }

        $id = $this->request->getVar('edit_id_kontak');
        $data = [
            'user' => $this->user, 'description' => htmlspecialchars($this->request->getVar('edit_number_link'))
        ];
        $update = $this->KontakModel->update($id, $data);
        if ($update) {
            session()->setFlashdata('message', 'Data kontak berhasil di perbaharui');
            session()->setFlashdata('message1', 'success');
        } else {
            session()->setFlashdata('message', 'Data kontak gagal di perbaharui');
            session()->setFlashdata('message1', 'Error');
        }
        return redirect('admin-kontak');
    }

    public function deleteKontak()
    {
        $id = $this->request->getVar('idKontak');
        $delete = $this->KontakModel->delete($id);
        if ($delete) {
            session()->setFlashdata('message', 'Data kontak berhasil di hapus');
            session()->setFlashdata('message1', 'success');
        } else {
            session()->setFlashdata('message', 'Data kontak gagal di hapus');
            session()->setFlashdata('message1', 'error');
        }
        return redirect('admin-kontak');
    }

    // Add FAQ
    public function faq()
    {
        $data = [
            'user' => $this->user,
            'title' => 'FAQ',
            'faq' => $this->FaqModel->findAll(),
            'validation' => $this->validation,
        ];
        return view('swevel/admin/admin_faq', $data);
    }
    public function addFaq()
    {
        if (!$this->validate([
            'add-kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori harus diisi'
                ]
            ],
            'add-question' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pertanyaan harus diisi'
                ]
            ],
            'add-answer' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jawaban harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            session()->setFlashdata('message2', 'ErrorAdd');
            return redirect()->back()->withInput();
        }

        $data = [
            'user' => $this->user,
            'from' => 'Swevel',
            'kategori' => $this->request->getVar('add-kategori'),
            'question' => $this->request->getVar('add-question'),
            'answer' => $this->request->getVar('add-answer'),
        ];
        $insert = $this->FaqModel->insert($data);
        if ($insert) {
            session()->setFlashdata('message', 'Data faq berhasil di publish');
            session()->setFlashdata('message1', 'success');
        } else {
            session()->setFlashdata('message', 'Data faq gagal di publish');
            session()->setFlashdata('message1', 'Error');
        }
        return redirect('admin-faq');
    }
    public function updateAnswerFaq()
    {
        if (!$this->validate([
            'update-answer' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jawaban harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            session()->setFlashdata('message2', 'ErrorUpdate');
            return redirect()->back()->withInput();
        }

        $id = $this->request->getVar('detail-id');
        $data = [
            'user' => $this->user, 'answer' => $this->request->getVar('update-answer'),
        ];
        $update = $this->FaqModel->update($id, $data);
        if ($update) {
            session()->setFlashdata('message', 'Data faq berhasil di publish');
            session()->setFlashdata('message1', 'success');
        } else {
            session()->setFlashdata('message', 'Data faq gagal di publish');
            session()->setFlashdata('message1', 'Error');
        }
        return redirect('admin-faq');
    }
    public function deleteFaq()
    {
        $id = $this->request->getVar('idFaq');
        $delete = $this->FaqModel->delete($id);
        if ($delete) {
            session()->setFlashdata('message', 'Data faq berhasil di hapus');
            session()->setFlashdata('message1', 'success');
        } else {
            session()->setFlashdata('message', 'Data faq gagal di hapus');
            session()->setFlashdata('message1', 'error');
        }
        return redirect('admin-faq');
    }


    public function faq_from_user()
    {
        $nama = $this->request->getVar('nama');
        $email = $this->request->getVar('email');
        $telepon = $this->request->getVar('telepon');
        $pesan = $this->request->getVar('pesan');
        $kategori = $this->request->getVar('kategori');

        $data = [
            'from' => htmlspecialchars($nama),
            'question' => htmlspecialchars($pesan),
            'answer' => '',
            'email' => htmlspecialchars($email),
            'telepon' => htmlspecialchars($telepon),
            'kategori' => htmlspecialchars($kategori),
        ];
        $insert = $this->FaqModel->insert($data);
        if ($insert) {
            return json_encode([
                'code' => '200',
                'status' => 'success'
            ]);
        } else {
            return json_encode([
                'code' => '500',
                'status' => 'error'
            ]);
        }
    }

    // Admin Course
    public function course()
    {
        $data = [
            'user' => $this->user,
            'title' => 'Admin Course',
            'course' => $this->CourseModel->findAll(),
        ];
        return view('swevel/admin/admin-course', $data);
    }
    public function detailCourse($slug)
    {
        $course = $this->CourseModel->where('slug_course', $slug)->first();
        $step_course = $this->SubCourseModel->where('id_course', $course['id'])->findAll();
        $data = [
            'user' => $this->user,
            'title' => 'View Course ' . $course['nama_course'],
            'course' => $course,
            'step_course' => $step_course,
            'slug_course' => $slug,
        ];
        return view('swevel/admin/admin-detail-course', $data);
    }

    public function addStepCourse($slug)
    {
        $course = $this->CourseModel->where('slug_course', $slug)->first();
        $count_step = $this->SubCourseModel->where('id_course', $course['id'])->countAllResults();
        $step_course = $this->SubCourseModel->where('id_course', $course['id'])->findAll();

        $data = [
            'user' => $this->user,
            'title' => 'Tambah Step Course ' . $course['nama_course'],
            'course' => $course,
            'step_course' => $step_course,
            'count_step' => $count_step + 1,
            'validation' => Validation(),
        ];
        return view('swevel/admin/admin-add-step-course', $data);
    }

    public function saveSubCourse()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul step harus diisi'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'deskripsi harus diisi'
                ]
            ],
            'level' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'level tidak boleh kosong'
                ]
            ],
            'jam' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'jam tidak boleh kosong'
                ]
            ],

        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            return redirect()->back()->withInput();
        }
        $judul = $this->request->getVar('judul');
        $slug_sub_course = strtolower(str_replace(' ', '-', $judul));
        $data = [
            'user' => $this->user,
            'id_course' => $this->request->getVar('id'),
            'title' => $judul,
            'slug_sub_course' => $slug_sub_course,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'level' => htmlspecialchars($this->request->getVar('level')),
            'hours' => htmlspecialchars($this->request->getVar('jam')),
            'step' => htmlspecialchars($this->request->getVar('step')),
        ];
        $insert = $this->SubCourseModel->insert($data);
        if ($insert) {
            session()->setFlashdata('message', 'Data step course berhasil di publish');
            session()->setFlashdata('message1', 'success');
        } else {
            session()->setFlashdata('message', 'Data step course gagal di publish');
            session()->setFlashdata('message1', 'Error');
        }
        // return redirect('admin-course/' . $this->request->getVar('slug'));
        return redirect('admin-course');
    }

    public function team()
    {
        $data = [
            'user' => $this->user,
            'title' => 'Team',
            'team' => $this->TeamModel->findAll(),
            'validation' => $this->validation,
        ];
        return view('swevel/admin/admin-team', $data);
    }

    public function saveTeam()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Tidak boleh kosong'
                ]
            ],
            'jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jabatan Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            session()->setFlashdata('message2', 'ErrorAdd');
            return redirect()->back()->withInput();
        }

        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getRandomName();
        $this->TeamModel->insert([
            'nama' => htmlspecialchars($this->request->getVar('nama')),
            'jabatan' => htmlspecialchars($this->request->getVar('jabatan')),
            'image' => $fileName,
            'linkedin' => htmlspecialchars($this->request->getVar('linkedin')),
            'instagram' => htmlspecialchars($this->request->getVar('instagram')),
            'facebook' => htmlspecialchars($this->request->getVar('facebook')),
        ]);
        $dataBerkas->move('img/team/', $fileName);
        session()->setFlashdata('message1', 'success');
        session()->setFlashdata('message', 'Data team Berhasil di Upload');
        return redirect('admin-team');
    }

    public function updateTeam()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Tidak boleh kosong'
                ]
            ],
            'jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jabatan Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
                'errors' => [
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            session()->setFlashdata('message2', 'ErrorUpdate');
            return redirect()->back()->withInput();
        }

        $dataBerkas = $this->request->getFile('berkas');
        if ($dataBerkas->getError() == 4) {
            $fileName = $this->request->getVar('file_lama');
        } else {
            $fileName = $dataBerkas->getRandomName();
            $dataBerkas->move('img/team/', $fileName);
            $fileDelete = 'img/team/' . $this->request->getVar('file_lama');
            unlink($fileDelete);
        }
        $id = $this->request->getVar('edit_id');
        $data = [
            'user' => $this->user,
            'nama' => htmlspecialchars($this->request->getVar('nama')),
            'jabatan' => htmlspecialchars($this->request->getVar('jabatan')),
            'image' => $fileName,
            'linkedin' => htmlspecialchars($this->request->getVar('linkedin')),
            'instagram' => htmlspecialchars($this->request->getVar('instagram')),
            'facebook' => htmlspecialchars($this->request->getVar('facebook')),
        ];
        $this->TeamModel->update($id, $data);
        // $dataBerkas->move('img/team/', $fileName);
        session()->setFlashdata('message1', 'success');
        session()->setFlashdata('message', 'Data team Berhasil di update');
        return redirect('admin-team');
    }
    public function deleteTeam()
    {
        $id = $this->request->getVar('idTeam');
        unlink('img/team/' . $this->request->getVar('file_old'));
        $delete = $this->TeamModel->delete($id);
        if ($delete) {
            session()->setFlashdata('message', 'Data team berhasil di hapus');
            session()->setFlashdata('message1', 'success');
        } else {
            session()->setFlashdata('message', 'Data team gagal di hapus');
            session()->setFlashdata('message1', 'error');
        }
        return redirect('admin-team');
    }

    public function pembayaran()
    {
        $data = [
            'user' => $this->user,
            'title' => 'Kelola Pembayaran',
            'validation' => $this->validation,
            'bank' => $this->PembayaranModel->findAll(),
        ];
        return view('swevel/admin/admin-pembayaran', $data);
    }

    public function simpan_pembayaran()
    {

        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Bank Tidak boleh kosong'
                ]
            ],
            'norek' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Rekening Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png,image/svg/]|max_size[berkas,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png,svg',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            return redirect()->back()->withInput();
        }
        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getRandomName();
        $dataBerkas->move('img/bank/', $fileName);
        $data = [
            'nama_bank' => htmlspecialchars($this->request->getVar('nama')),
            'no_rekening' => htmlspecialchars($this->request->getVar('norek')),
            'gambar' => $fileName,
        ];
        $simpan = $this->PembayaranModel->insert($data);
        if ($simpan) {
            session()->setFlashdata('message', 'Data pembayaran berhasil ditambahkan');
            session()->setFlashdata('message1', 'Success');
        } else {
            session()->setFlashdata('message', 'Data pembayaran gagal ditambahkan');
            session()->setFlashdata('message1', 'Error');
        }
        return redirect('pembayaran');
    }

    public function update_pembayaran()
    {

        $id = $this->request->getVar('id');
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Bank Tidak boleh kosong'
                ]
            ],
            'norek' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Rekening Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png,image/svg/]|max_size[berkas,2048]',
                'errors' => [
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png,svg',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            return redirect()->back()->withInput();
        }
        $dataBerkas = $this->request->getFile('berkas');
        $bank = $this->PembayaranModel->where('id', $id)->first();
        if ($dataBerkas->getError() == 4) {
            $fileName = $bank['gambar'];
        } else {
            $fileName = $dataBerkas->getRandomName();
            $dataBerkas->move('img/bank/', $fileName);
            $filelama = 'img/bank/' . $bank['gambar'];
            if (file_exists($filelama)) {
                unlink($filelama);
            }
        }
        $data = [
            'nama_bank' => htmlspecialchars($this->request->getVar('nama')),
            'no_rekening' => htmlspecialchars($this->request->getVar('norek')),
            'gambar' => $fileName,
        ];
        $simpan = $this->PembayaranModel->update($id, $data);
        if ($simpan) {
            session()->setFlashdata('message', 'Data pembayaran berhasil diubah');
            session()->setFlashdata('message1', 'Success');
        } else {
            session()->setFlashdata('message', 'Data pembayaran gagal diubah');
            session()->setFlashdata('message1', 'Error');
        }
        return redirect('pembayaran');
    }

    public function hapus_pembayaran()
    {
        $id = $this->request->getVar('id');
        $pembayaran = $this->PembayaranModel->find($id);
        $file_lama = 'img/bank/' . $pembayaran['gambar'];
        if (file_exists($file_lama)) {
            unlink($file_lama);
        }
        $hapus = $this->PembayaranModel->delete($id);
        if ($hapus) {
            session()->setFlashdata('message', 'Data berhasil dihapus');
            session()->setFlashdata('message1', 'Success');
        } else {
            session()->setFlashdata('message', 'Data gagal dihapus');
            session()->setFlashdata('message1', 'Error');
        }
        return redirect('pembayaran');
    }
}
