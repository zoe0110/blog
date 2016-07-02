<?php
use App\Article;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('articles')->delete();  
    	for ($i=0; $i < 10; $i++) {     
    		Article::create([      
    			'title'   => 'Article '.$i,       
    			'slug'    => 'first-article',       
    			'body'    => 'Blog Content '.$i,       
    			'user_id' => 1,     ]);  
    	}
    }
}
