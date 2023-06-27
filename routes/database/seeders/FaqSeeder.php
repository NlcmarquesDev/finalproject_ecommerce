<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'question' => 'What is e-commerce?',
                'answer' => 'E-commerce, short for electronic commerce, is the buying and selling of goods and services over the internet.',
            ],
            [
                'question' => 'What are the advantages of e-commerce?',
                'answer' => 'E-commerce offers advantages such as lower overhead costs, wider reach to customers, and greater flexibility in conducting business.',
            ],
            [
                'question' => 'What are some common types of e-commerce?',
                'answer' => 'Some common types of e-commerce include B2B (business-to-business), B2C (business-to-consumer), C2B (consumer-to-business), and C2C (consumer-to-consumer).',
            ],
            [
                'question' => 'What is a payment gateway?',
                'answer' => 'A payment gateway is a service that authorizes and processes payments for e-commerce transactions.',
            ],
            [
                'question' => 'What is a shopping cart?',
                'answer' => 'A shopping cart is an e-commerce software application that allows customers to select and purchase products online.',
            ],
            [
                'question' => 'What is a SSL certificate?',
                'answer' => 'A SSL (Secure Sockets Layer) certificate is a digital certificate that authenticates the identity of a website and encrypts data transmitted between the website and its users.',
            ],
            [
                'question' => 'What is a product page?',
                'answer' => 'A product page is a webpage on an e-commerce site that displays information about a specific product, including its name, description, images, price, and customer reviews.',
            ],
            [
                'question' => 'What is a checkout page?',
                'answer' => 'A checkout page is the final step of an e-commerce transaction, where customers review their order and enter their payment and shipping information.',
            ],
            [
                'question' => 'What is inventory management?',
                'answer' => 'Inventory management is the process of monitoring and controlling a business\'s inventory of products, including ordering, storing, and tracking products.',
            ],
            [
                'question' => 'What is order fulfillment?',
                'answer' => 'Order fulfillment is the process of receiving, processing, and delivering customer orders, including picking and packing products, and arranging for shipping and delivery.',
            ],
            [
                'question' => 'What is a return policy?',
                'answer' => 'A return policy is a set of rules and procedures that govern how customers can return products they have purchased from an e-commerce store.',
            ],
            [
                'question' => 'What is a chargeback?',
                'answer' => 'A chargeback is a dispute initiated by a customer with their bank or credit card issuer over a transaction they believe was fraudulent or unauthorized.',
            ],
            [
                'question' => 'What is SEO?',
                'answer' => 'SEO (Search Engine Optimization) is the practice of improving the visibility and ranking of a website in search engine results pages.',
            ],
            ];

        foreach ($data as $faq) {
            DB::table('faqs')->insert($faq);
        }
    }
}
//to seed the faq database
//php artisan db:seed --class=FaqSeeder
