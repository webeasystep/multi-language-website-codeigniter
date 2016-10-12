<?php

/** @property news_model $news_model *
 */
class News extends Front_end
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->lang->load('news');


    }


    // this function to handle getting all news
    function index()
    {
        $data['news'] = $this->news_model->get_all();

        $this->view('content/news_page', $data);
    }

    // this function to handle getting all news
    function news_list()
    {
        $data['news'] = $this->news_model->get_all();
        $this->view('content/news_list', $data);
    }
    /* this function to handle getting
      news details */

    function show_one($ne_id)
    {
        // get a post news based on news id
        $data['news'] = $this->news_model->get_one($ne_id);
        $this->view('content/show_one', $data);
    }

    function create()
    {
        $this->form_validation->set_rules('ne_title',lang('ne_title'), 'trim|required|htmlspecialchars');
        $this->form_validation->set_rules('ne_desc',lang('ne_desc'), 'trim|required|htmlspecialchars');
        if ($this->form_validation->run($this) == FALSE) {
            $this->view('content/news_create');
        } else {
            if (!empty($_FILES)) {
                $file = $this->upload_file('files');
            } else {
                $file = NULL;
            }

            $this->news_model->create($file['file_name']);
            $this->session->set_flashdata('success_msg','News post Created Successfully');
            redirect('news/news_list');
        }
    }
    /* This function edit files. */

    function edit($newsId)
    {
        $data['news'] = $this->news_model->get_one($newsId);
        $this->form_validation->set_rules('ne_title',lang('ne_title'), 'trim|required|htmlspecialchars');
        $this->form_validation->set_rules('ne_desc',lang('ne_desc'), 'trim|required|htmlspecialchars');

       if ($this->form_validation->run($this) == FALSE) {
            $this->view('content/news_edit', $data);
        } else {
            if (!empty($_FILES['files']['name'])) {
                $files_url = $this->upload_file('files');
                if ($data['files']->ne_img != null) {
                    if (file_exists(PUBPATH . "global/uploads/" . $data['files']->ne_img)) {
                        unlink(PUBPATH . "global/uploads/" . $data['files']->ne_img);
                    }
                }
            }

            $this->news_model->update($newsId, $files_url['file_name']);
            $this->session->set_flashdata('success_msg','News post updated Successfully');
            redirect('news/news_list');
        }
    }

    function upload_file($file)
    {
        $this->load->library("upload");
        $upload_cfg['upload_path'] = "global/uploads/";
        $upload_cfg['encrypt_name'] = TRUE;
        $upload_cfg['allowed_types'] = "gif|jpg|png|jpeg";
        /*        $upload_cfg['max_width'] = '1920'; /* max width of the image file */
        /*        $upload_cfg['max_height'] = '1080'; /* max height of the image file */
        /*        $upload_cfg['min_width'] = '300'; /* min width of the image file */
        /*        $upload_cfg['min_height'] = '300'; /* min height of the image file */

        $this->upload->initialize($upload_cfg);

        if ($this->upload->do_upload($file)) {
            $image = $this->upload->data();

            $this->session->set_flashdata('success_msg', lang('success_msg_edit_cat'));
            return $image;
        } else {
            $msg = $this->form_validation->field_data['file_to_upload']['error'] = $this->upload->display_errors('', '');
            $this->session->set_flashdata('success_msg', $msg);
            redirect('news/news_list');
        }
    }

    function remove($id) {
        $entry = $this->news_model->get_one($id);
        if ($this->news_model->delete($id)) {
            if ($entry->ne_img != null && file_exists(PUBPATH . "global/uploads/" . $entry->ne_img)) {
                unlink(PUBPATH . "global/uploads/" . $entry->ne_img);
            }
            $this->session->set_flashdata('success_msg', '1 new category deleted!');
            redirect('news/news_list');
        }
    }

}
/* End of file news.php */
/* Location: ./application/controllers/news.php */