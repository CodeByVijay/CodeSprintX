<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CourseController extends Controller
{
    /**
     * Display the course description page
     *
     * @param string $slug The course slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        // Define course data (in a real site, this would come from a database)
        // $courses = [
        //     'web-development' => [
        //         'title' => 'Web Development',
        //         'icon' => 'fas fa-code',
        //         'bg_color' => 'bg-blue-600',
        //         'short_desc' => 'Master HTML, CSS, JS, PHP, Laravel and build responsive, dynamic websites.',
        //         'long_desc' =>
        //             'Our Web Development internship program covers all aspects of modern web development, from front-end technologies like HTML5, CSS3, JavaScript and React to back-end technologies including PHP, Laravel, and MySQL. You\'ll learn to build responsive, dynamic websites and web applications while working on real-world projects.',
        //         'skills' => [
        //             'HTML5',
        //             'CSS3',
        //             'JavaScript',
        //             'jQuery',
        //             'React',
        //             'PHP',
        //             'Laravel',
        //             'MySQL',
        //             'Git',
        //             'Responsive Design',
        //         ],
        //         'projects' => [
        //             'E-commerce Website',
        //             'Content Management System',
        //             'Personal Portfolio',
        //             'Social Media Application',
        //         ],
        //         'price_3_month' => '₹500.00',
        //         'price_6_month' => '₹800.00',
        //         'original_price_3_month' => '₹750.00',
        //         'original_price_6_month' => '₹1200.00',
        //         'offer_ends_at' => '2025-06-20 23:59:59', // Fixed expiration date
        //         'meta_description' => 'Master HTML, CSS, JavaScript, PHP, Laravel and build responsive, dynamic websites. Join our 3 or 6-month Web Development internship program.',
        //         'meta_keywords' => 'web development, HTML, CSS, JavaScript, PHP, Laravel, internship, coding'
        //     ],
        //     'python-development' => [
        //         'title' => 'Python Development',
        //         'icon' => 'fab fa-python',
        //         'bg_color' => 'bg-yellow-600',
        //         'short_desc' => 'Learn Python programming, data analysis, Django, and machine learning fundamentals.',
        //         'long_desc' =>
        //             'The Python Development internship program covers core Python programming concepts, data structures, and algorithms, along with web development using Django, data analysis with pandas and NumPy, and an introduction to machine learning with scikit-learn. Suitable for beginners and intermediate programmers looking to expand their skills.',
        //         'skills' => [
        //             'Python Fundamentals',
        //             'Data Structures',
        //             'Algorithms',
        //             'Django',
        //             'Flask',
        //             'pandas',
        //             'NumPy',
        //             'scikit-learn',
        //             'API Development',
        //             'Database Integration',
        //         ],
        //         'projects' => [
        //             'Web Application with Django',
        //             'Data Analysis Dashboard',
        //             'API Development',
        //             'Machine Learning Model',
        //         ],
        //         'price_3_month' => '₹500.00',
        //         'price_6_month' => '₹800.00',
        //         'original_price_3_month' => '₹750.00',
        //         'original_price_6_month' => '₹1200.00',
        //         'offer_ends_at' => '2025-06-20 23:59:59', // Fixed expiration date
        //         'meta_description' => 'Learn Python programming, data analysis, Django and machine learning. Join our Python Development internship program for beginners and intermediate developers.',
        //         'meta_keywords' => 'python, django, data analysis, machine learning, pandas, numpy, internship'
        //     ],
        //     'java-development' => [
        //         'title' => 'Java Development',
        //         'icon' => 'fab fa-java',
        //         'bg_color' => 'bg-red-600',
        //         'short_desc' => 'Master Java programming, OOP concepts, Spring Boot, and enterprise applications.',
        //         'long_desc' =>
        //             'Our Java Development internship program focuses on Java programming, object-oriented principles, and enterprise application development with Spring Boot. You\'ll learn to build robust, scalable applications while mastering concepts like dependency injection, MVC architecture, and microservices.',
        //         'skills' => [
        //             'Java Core',
        //             'Object-Oriented Programming',
        //             'Spring Framework',
        //             'Spring Boot',
        //             'Hibernate',
        //             'RESTful APIs',
        //             'Microservices',
        //             'JUnit',
        //             'Maven/Gradle',
        //             'SQL Databases',
        //         ],
        //         'projects' => [
        //             'Spring Boot Web Application',
        //             'RESTful API Service',
        //             'E-commerce Platform',
        //             'Banking Application',
        //         ],
        //         'price_3_month' => '₹500.00',
        //         'price_6_month' => '₹800.00',
        //            'original_price_3_month' => '₹750.00',
        //         'original_price_6_month' => '₹1200.00',
        //         'offer_ends_at' => '2025-06-20 23:59:59', // Fixed expiration date
        //         'meta_description' => 'Master Java programming, OOP concepts, Spring Boot, and enterprise applications in our comprehensive internship program.',
        //         'meta_keywords' => 'java, spring boot, enterprise applications, object-oriented programming, microservices, internship'
        //     ],
        //     'data-science' => [
        //         'title' => 'Data Science',
        //         'icon' => 'fas fa-database',
        //         'bg_color' => 'bg-purple-600',
        //         'short_desc' =>
        //             'Learn data analysis, visualization, statistical methods and machine learning algorithms.',
        //         'long_desc' =>
        //             'The Data Science internship program covers the complete data science pipeline, from data collection and cleaning to analysis, visualization, and machine learning. You\'ll learn to use Python libraries like pandas, NumPy, Matplotlib, and scikit-learn to extract insights from data and build predictive models.',
        //         'skills' => [
        //             'Python for Data Science',
        //             'pandas',
        //             'NumPy',
        //             'Matplotlib/Seaborn',
        //             'Statistical Analysis',
        //             'Machine Learning',
        //             'Data Cleaning',
        //             'Feature Engineering',
        //             'Data Visualization',
        //             'Jupyter Notebooks',
        //         ],
        //         'projects' => [
        //             'Exploratory Data Analysis',
        //             'Predictive Modeling',
        //             'Classification and Clustering',
        //             'Time Series Analysis',
        //         ],
        //         'price_3_month' => '₹500.00',
        //         'price_6_month' => '₹800.00',
        //         'original_price_3_month' => '₹999.00',
        //         'original_price_6_month' => '₹1200.00',
        //         // 'offer_ends_at' => '2025-06-20 23:59:59', // Fixed expiration date
        //         'meta_description' => 'Learn data analysis, visualization, statistical methods and machine learning algorithms with our Data Science internship program.',
        //         'meta_keywords' => 'data science, data analysis, machine learning, visualization, statistical analysis, pandas, numpy, internship'
        //     ],
        //     'mobile-development' => [
        //         'title' => 'Mobile App Development',
        //         'icon' => 'fas fa-mobile-alt',
        //         'bg_color' => 'bg-green-600',
        //         'short_desc' => 'Create iOS and Android applications using React Native and Flutter frameworks.',
        //         'long_desc' =>
        //             'Our Mobile App Development internship program teaches you to build cross-platform mobile applications using modern frameworks like React Native and Flutter. You\'ll learn to create responsive, native-like mobile UIs, implement navigation, manage state, and integrate with backend services.',
        //         'skills' => [
        //             'React Native',
        //             'Flutter',
        //             'JavaScript/Dart',
        //             'UI/UX for Mobile',
        //             'State Management',
        //             'API Integration',
        //             'Native Device Features',
        //             'App Deployment',
        //             'Testing',
        //             'Performance Optimization',
        //         ],
        //         'projects' => [
        //             'Social Media App',
        //             'E-commerce Mobile App',
        //             'Task Management App',
        //             'Location-based Service App',
        //         ],
        //         'price_3_month' => '₹500.00',
        //         'price_6_month' => '₹800.00',
        //         'original_price_3_month' => '₹750.00',
        //         'original_price_6_month' => '₹1200.00',
        //         'offer_ends_at' => '2025-06-20 23:59:59', // Fixed expiration date
        //         'meta_description' => 'Learn to create iOS and Android applications using React Native and Flutter frameworks in our comprehensive Mobile App Development internship.',
        //         'meta_keywords' => 'mobile development, react native, flutter, iOS, android, app development, internship'
        //     ],
        //     'cybersecurity' => [
        //         'title' => 'Cybersecurity',
        //         'icon' => 'fas fa-shield-alt',
        //         'bg_color' => 'bg-gray-800',
        //         'short_desc' => 'Learn network security, ethical hacking, penetration testing and security protocols.',
        //         'long_desc' =>
        //             'The Cybersecurity internship program provides a comprehensive introduction to information security concepts, network security, ethical hacking, and penetration testing. You\'ll learn to identify vulnerabilities, implement security measures, and protect systems from various types of cyber attacks.',
        //         'skills' => [
        //             'Network Security',
        //             'Ethical Hacking',
        //             'Penetration Testing',
        //             'Security Protocols',
        //             'Cryptography',
        //             'Risk Assessment',
        //             'Security Auditing',
        //             'Incident Response',
        //             'Firewall Configuration',
        //             'Security Tools',
        //         ],
        //         'projects' => [
        //             'Security Audit Report',
        //             'Penetration Testing Exercise',
        //             'Security Policy Development',
        //             'Network Defense Simulation',
        //         ],
        //         'price_3_month' => '₹500.00',
        //         'price_6_month' => '₹800.00',
        //         'original_price_3_month' => '₹750.00',
        //         // 'original_price_6_month' => '₹1200.00',
        //         'offer_ends_at' => '2025-06-20 23:59:59', // Fixed expiration date
        //         'meta_description' => 'Master network security, ethical hacking, penetration testing and security protocols with our comprehensive Cybersecurity internship program.',
        //         'meta_keywords' => 'cybersecurity, network security, ethical hacking, penetration testing, security protocols, internship'
        //     ],
        // ];
        if(empty($slug)) {
            return redirect()->route('home', ['#courses']);
        }
        $courses = Course::where('slug', $slug)
            ->first();


        // If course doesn't exist, redirect to home
        if (empty($courses) && !isset($courses->slug)) {
            return redirect()->route('home', ['#courses']);
        }

        // Get current course data
        $currentCourse = $courses->slug ?? null;

        // Set meta tags for SEO
        $title = $courses->title . ' Internship Program | CodeSprintX';

        $description = $courses->meta_description ?? $courses->meta_description->short_desc;

        if (empty($description)) {
            $description = 'Join our ' . $courses->title . ' internship program to gain hands-on experience and build your skills.';
        }
        $keywords = $courses->meta_keywords ?? '';

        return view('home.pages.course_description', [
            'course' => $courses->slug,
            'currentCourse' => $courses->toArray(),
            'pageTitle' => $title,
            'pageDescription' => $description,
            'pageKeywords' => $keywords
        ]);
    }
}
