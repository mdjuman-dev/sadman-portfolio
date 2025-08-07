<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use App\Models\Project;
use App\Models\Servics;
use Spatie\Sitemap\Sitemap;
use Illuminate\Http\Request;
use Spatie\Sitemap\Tags\Url;
use App\Http\Controllers\Controller;
use App\Models\Service;

class SitemapController extends Controller
{
    function index()
    {
        $sitemap = Sitemap::create();


        $sitemap->add(Url::create('/')->setPriority(1.0)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY));
        $sitemap->add(Url::create('/services')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
        $sitemap->add(Url::create('/project')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
        $sitemap->add(Url::create('/blog')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY));
        $sitemap->add(Url::create('/contact')->setPriority(0.7)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
        $sitemap->add(Url::create('/about')->setPriority(0.7)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));


        //Blog Sitemap
        $blogs = Blog::all();
        foreach ($blogs as $blog) {
            $sitemap->add(Url::create("/blog-details/{$blog->slug}")
                ->setLastModificationDate($blog->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.9));
        }
        //Project Sitemap
        $projects = Project::all();
        foreach ($projects as $project) {
            $sitemap->add(Url::create("/project-details/{$project->slug}")
                ->setLastModificationDate($project->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.9));
        }
        // Services Sitemap
        $services = Service::all();
        foreach ($services as $service) {
            $sitemap->add(Url::create("/service-details/{$service->slug}")
                ->setLastModificationDate($service->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.9));
        }
        return $sitemap->toResponse(request());
    }

    function download()
    {
        $sitemap = Sitemap::create();

        // Static URLs
        $staticUrls = [
            ['url' => '/', 'priority' => 1.0, 'freq' => Url::CHANGE_FREQUENCY_DAILY],
            ['url' => '/services', 'priority' => 0.8, 'freq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['url' => '/project', 'priority' => 0.8, 'freq' => Url::CHANGE_FREQUENCY_WEEKLY],
            ['url' => '/blog', 'priority' => 0.8, 'freq' => Url::CHANGE_FREQUENCY_DAILY],
            ['url' => '/contact', 'priority' => 0.7, 'freq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['url' => '/about', 'priority' => 0.7, 'freq' => Url::CHANGE_FREQUENCY_MONTHLY],
        ];

        foreach ($staticUrls as $item) {
            $sitemap->add(
                Url::create($item['url'])
                    ->setPriority($item['priority'])
                    ->setChangeFrequency($item['freq'])
            );
        }

        // Blog URLs
        $blogs = Blog::all();
        foreach ($blogs as $blog) {
            $sitemap->add(
                Url::create("/blog-details/{$blog->slug}")
                    ->setLastModificationDate($blog->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.9)
            );
        }

        // Project URLs
        $projects = Project::all();
        foreach ($projects as $project) {
            $sitemap->add(
                Url::create("/project-details/{$project->slug}")
                    ->setLastModificationDate($project->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.9)
            );
        }

        // Services URLs
        $services = Service::all();
        foreach ($services as $service) {
            $sitemap->add(
                Url::create("/service-details/{$service->slug}")
                    ->setLastModificationDate($service->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.9)
            );
        }

        // Save as file
        $filePath = public_path('sitemap.xml');
        $sitemap->writeToFile($filePath);

        // Return file as download
        return response()->download($filePath, 'sitemap.xml')->deleteFileAfterSend(true);
    }
}
