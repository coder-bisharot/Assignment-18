<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $blogPostTitles = [
            '10 Essential Tools for Every DIY Enthusiast',
            'Exploring the Hidden Gems of [Travel Destination]',
            'A Beginners Guide to Healthy Eating Habits',
            'The Latest Fashion Trends for the Season',
            'Parenting Hacks for Busy Moms and Dads',
            'Unlocking Your Full Potential: The Power of Personal Development',
            'Starting a Successful Online Business: Tips and Tricks',
            'A Beginners Guide to Investing in Stocks',
            'Exploring the Intersection of Art and Technology',
            'The Benefits of Regular Exercise and Fitness',
            'Creating a Cozy and Stylish Home on a Budget',
            'Practical Self-Care Strategies for a Balanced Life',
            'The Future of Education: Trends and Innovations',
            'Movie Review: [Latest Blockbuster Film]',
            'Simple Steps for a Greener and More Sustainable Lifestyle',
            'The Science Behind [Intriguing Phenomenon]',
            'Finding Inspiration in Everyday Life',
            'Mastering the Art of Skincare: Tips and Product Recommendations',
            'Gaming Essentials: Must-Have Gear for Gamers',
            'Book Review: [Bestselling Novel]',
            'Capturing Moments: A Guide to Stunning Photography',
            'Exploring the Diversity of Music Genres',
            'Addressing Social Issues for a Better Tomorrow',
            'Fun and Creative DIY Crafts for All Ages',
            'Caring for Your Furry Friend: Pet Care Tips and Advice',
            'Building a Successful Career in [Industry]',
            'Navigating Relationships in the Digital Age',
            'The Power of Mindfulness and Meditation',
            'Level Up Your Fitness Routine: Advanced Workout Tips',
            'Managing Your Finances for a Secure Future',
            'Productivity Hacks to Maximize Your Time',
            'Transforming Your Living Space: Home Improvement Ideas',
            'Motivation 101: Igniting Your Inner Drive',
            'Embracing Adventure: Thrilling Outdoor Activities to Try',
            'Uncovering the Stories of the Past: History and Heritage',
            'Exploring the World of Science Fiction and Fantasy',
            'The Latest Innovations in Automotive Technology',
            'Planning Your Dream Wedding: Tips and Inspiration',
            'Living a Sustainable Life: Small Changes, Big Impact',
            'The Art of Fashion and Beauty',
            'Nurturing Your Mental Health and Well-being',
            'The Latest Gadgets and Tech News',
            'Film Review: [Critically Acclaimed Movie]',
            'Laugh Out Loud: Hilarious Stories and Satirical Commentary',
            'Understanding Politics: Insights and Perspectives',
            'Demystifying Artificial Intelligence and Machine Learning',
            'Mastering Digital Marketing: Strategies and Techniques',
            'Craft Beer 101: A Guide to Brewing and Tasting',
            'Achieving Optimal Fitness and Nutrition',
            'Building Your Personal Brand for Career Success',
            'Wanderlust Chronicles: Travel Tips and Destination Guides',
            'Creating a Stylish and Organized Home Decor',
            'Living with Less: Embracing Minimalism and Decluttering',
            'Top Product Reviews and Recommendations',
            'Thriving on a Plant-Based Lifestyle: Vegan Tips and Recipes',
            'Unlocking the Secrets of a Healthy Diet and Weight Loss',
            'Revamping Your Home: Interior Design and Renovation Ideas',
            'Life Hacks for a Simpler and More Efficient Life',
            'Social Media Strategy for Business and Influencers',
            'The Art of Cinema: Film Reviews and Critiques',
            'The Fascinating World of Language Learning',
            'Launching and Growing an Online Business'];

        return [
            'title' => $blogPostTitles[rand(0,40)],
            'description' => fake()->sentences( rand( 2, 10 ), true ),
            'excerpt' => fake()->sentences( rand( 2, 5 ), true ),
            'post_thumb'=>  'https://picsum.photos/300?random=' . rand( 1, 22424 ),
            'category_id'=>Category::all()->random()->id,
        ];
    }
}
