<?php  namespace VaahCms\Modules\Blog\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use VaahCms\Modules\Blog\Models\Blog;
use VaahCms\Modules\Blog\Models\Category;

class ExtendController extends Controller
{

    //----------------------------------------------------------
    public function __construct()
    {
    }
    //----------------------------------------------------------
    public static function topLeftMenu()
    {
        $links = [];

        $response['success'] = true;
        $response['data'] = $links;

        return vh_response($response);

    }
    //----------------------------------------------------------
    public static function topRightUserMenu()
    {
        $links = [];

        $response['success'] = true;
        $response['data'] = $links;

        return vh_response($response);
    }
    //----------------------------------------------------------
    public static function sidebarMenu()
    {
        $links = [];


        $links[0] = [
            'icon' => 'table',
            'label'=> 'Blog',
            'link'=> route('vh.backend.blog')
        ];


        if(version_compare(config('vaahcms.version'), '2.0.0', '<' )){
            $links[0]['link'] = route('vh.backend.blog');
        } else{
            $links[0]['url'] = route('vh.backend.blog');
        }


        $response['success'] = true;
        $response['data'] = $links;

        return vh_response($response);
    }
    //----------------------------------------------------------
    public function getDashboardItems(){
        $data = array();

        $data['card'] = [
            "title" => "Blog Details",
            "list" => [
                [
                    "count" => Blog::count(),
                    "label" => 'Total Blogs',
                    "icon" => "pi-book",
                    "type" => "success",
                ], 
                [
                    "count" => Blog::whereHas('status', function($query) {
                        $query->where('name', 'Published');
                    })->count(),
                    "label" => 'Published Blogs',
                    "icon" => "pi-check",
                    "type" => "success",
                ],
                [
                    "count" => Category::count(),
                    "label" => 'Total Categories',
                    "icon" => "pi-tag",
                    "type" => "success",
                ],
            ]
        ];

        $data['expanded_item'] = [
            [
                'title' => 'Blog',
                'content' => 'content',
            ],
        ];

        $response['success'] = true;
        $response['data'] = $data;
        return $response;
    }
    //----------------------------------------------------------

}
