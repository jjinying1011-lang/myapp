<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'เริ่มต้นเขียนเว็บแอปพลิเคชันด้วย Laravel 11 สำหรับผู้เริ่มต้น',
                'content' => 'Laravel 11 มาพร้อมกับโครงสร้างโฟลเดอร์ที่เรียบง่ายและทรงพลังยิ่งขึ้น ทำให้นักพัฒนาสามารถโฟกัสกับการเขียน Business Logic ได้อย่างมีประสิทธิภาพ บทความนี้จะพาคุณไปรู้จักกับระบบ Routing, Controller, Blade Engine และการตั้งค่า Database เบื้องต้นเพื่อเริ่มต้นโปรเจกต์ได้อย่างมั่นใจ',
                'status' => true,
                'created_at' => Carbon::now()->subDays(10),
                'updated_at' => Carbon::now()->subDays(10),
            ],
            [
                'title' => 'ทำความเข้าใจ MVC Pattern และการทำงานร่วมกับ Eloquent ORM',
                'content' => 'สถาปัตยกรรม Model-View-Controller (MVC) เป็นหัวใจสำคัญของเฟรมเวิร์กสมัยใหม่ และเมื่อผสานเข้ากับ Eloquent ORM ของ Laravel จะทำให้การจัดการข้อมูลและ Query ในฐานข้อมูลกลายเป็นเรื่องง่าย สะอาด และปลอดภัยจากการโจมตีประเภท SQL Injection',
                'status' => true,
                'created_at' => Carbon::now()->subDays(9),
                'updated_at' => Carbon::now()->subDays(9),
            ],
            [
                'title' => 'การออกแบบ Modern UI ด้วย Bootstrap 5 และ Custom CSS Design Tokens',
                'content' => 'สร้างประสบการณ์ผู้ใช้ระดับพรีเมียมด้วยการผสาน Utility Classes ของ Bootstrap 5 เข้ากับ CSS Variables สำหรับ Palette สียุคใหม่, Micro-animations, และการจัด Layout แบบ Responsive ให้ดูทันสมัยบนทุกขนาดหน้าจอ',
                'status' => true,
                'created_at' => Carbon::now()->subDays(8),
                'updated_at' => Carbon::now()->subDays(8),
            ],
            [
                'title' => 'ทำไม RESTful API จึงสำคัญต่อการพัฒนาระบบในยุค Microservices',
                'content' => 'เรียนรู้หลักการออกแบบ API ตามมาตรฐาน RESTful การกำหนด Endpoint ที่สื่อความหมาย การเลือกใช้ HTTP Methods ที่ถูกต้อง (GET, POST, PUT, DELETE) พร้อมทั้งแนวทางจัดการ HTTP Status Code และ JSON Format ให้มีมาตรฐานสากล',
                'status' => true,
                'created_at' => Carbon::now()->subDays(7),
                'updated_at' => Carbon::now()->subDays(7),
            ],
            [
                'title' => 'แนวทางการรักษาความปลอดภัยใน Web Application (Security Best Practices)',
                'content' => 'ความปลอดภัยของระบบคือสิ่งที่ไม่ควรมองข้าม บทความนี้สรุปข้อควรระวังสำคัญ เช่น การเปิดใช้ CSRF Protection, การป้องกัน XSS ผ่าน Blade Auto-escaping, การ Hash รหัสผ่านด้วย Bcrypt/Argon2 และการตั้งค่า CORS Headers อย่างปลอดภัย',
                'status' => true,
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(6),
            ],
            [
                'title' => 'การจัดการ State และ Session ใน Laravel สำหรับระบบ Authentication',
                'content' => 'เข้าใจวงจรชีวิตของ Session ในเว็บแอปพลิเคชัน การจัดเก็บข้อมูลผู้ใช้ล็อกอิน (User Session), Flash Message สำหรับแจ้งเตือนสถานะการทำงาน และการตั้งค่า Remember Me เพื่อความสะดวกในการใช้งานระบบอย่างปลอดภัย',
                'status' => true,
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now()->subDays(5),
            ],
            [
                'title' => 'เทคนิคการทำ Pagination และ Search Filter แบบ Real-time',
                'content' => 'การแสดงข้อมูลจำนวนมากจำเป็นต้องมีระบบแบ่งหน้า (Pagination) ที่มีประสิทธิภาพ ควบคู่ไปกับ Search & Filter เพื่อให้ผู้ใช้งานค้นหาข้อมูลได้อย่างรวดเร็วโดยไม่เพิ่มภาระให้กับ Database Server มากจนเกินไป',
                'status' => true,
                'created_at' => Carbon::now()->subDays(4),
                'updated_at' => Carbon::now()->subDays(4),
            ],
            [
                'title' => 'Git & GitHub Workflow สำหรับการทำงานร่วมกันในทีมพัฒนาซอฟต์แวร์',
                'content' => 'แนะนำขั้นตอนการใช้ Git ตั้งแต่การสร้าง Feature Branch, การเขียน Commit Message ที่มีความหมาย, การเปิด Pull Request, การทำ Code Review ตลอดจนการจัดการ Conflict ระหว่างรวมโค้ดเข้าสู่ Main Branch',
                'status' => true,
                'created_at' => Carbon::now()->subDays(3),
                'updated_at' => Carbon::now()->subDays(3),
            ],
            [
                'title' => 'แนวโน้มและทักษะสำคัญสำหรับ Full-stack Developer ในปี 2026',
                'content' => 'สำรวจภาพรวมทักษะที่ตลาดต้องการในปัจจุบัน ตั้งแต่ความเชี่ยวชาญฝั่ง Backend ด้วย PHP/Node.js, Frontend Ecosystem, Cloud Deployment (Docker & Serverless) และการประยุกต์ใช้ AI Assistant เพื่อเพิ่ม Productivity ในการเขียนโค้ด',
                'status' => true,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'title' => 'การปรับแต่งประสิทธิภาพฐานข้อมูล (Database Optimization & Indexing Guide)',
                'content' => 'แก้ปัญหาเว็บช้าด้วยการทำ Database Indexing ให้ตรงจุด การลดปัญหา N+1 Query Problem ด้วย Eager Loading และการประยุกต์ใช้ Cache (Redis/File) เพื่อเก็บผลลัพธ์ของ Query ที่ถูกเรียกใช้งานบ่อย ๆ',
                'status' => true,
                'created_at' => Carbon::now()->subDays(1),
                'updated_at' => Carbon::now()->subDays(1),
            ],
        ];

        foreach ($blogs as $blog) {
            DB::table('blogs')->insert($blog);
        }
    }
}
