@extends('user._layouts.profile')

@section('content')
    <div id="profile_header">
        <div><img src="profile.png" alt="Persons Name"></div>
        <div id="header_txt">
            <h1>{{ $user->firstname }} {{ $user->surname }}</h1>
            <strong>Tässä vois lukea userclass</strong>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex suscipit aliquam maiores, repellat unde necessitatibus voluptates aut dicta non tempore nostrum eveniet, fuga modi, laudantium libero delectus cum odio, error a. Ullam nostrum aperiam commodi blanditiis dolorum eius, rerum neque labore dolorem ut aliquid, quidem soluta. Harum unde, ipsa facilis.</p>
        </div>
        <div id="profile_main">
            <div id="left">
                <h2>Stuff</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam eius, fuga. Iure quo nulla, odio earum at ipsum neque, minima amet, libero eum, veritatis saepe!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil quis est tenetur nesciunt quam eos natus, soluta quod beatae officia, perspiciatis mollitia commodi asperiores dicta.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt ea, animi culpa similique deleniti possimus!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, iure!</p>
            </div>
            <div id="right">
                <ul class="ui_navlist">
                    <li>
                        <a href="#">
                            <img src="" alt="Kuvako"/>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam deleniti, aperiam nostrum magni iste inventore odit, quod! Ab inventore, pariatur. Repudiandae at maxime ipsam, deserunt deleniti facilis recusandae numquam quia modi, doloribus quasi rerum aliquid soluta fugiat aperiam sint! Suscipit sint voluptates esse omnis alias perspiciatis laborum harum, vero hic.</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="" alt="Kuvako"/>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam deleniti, aperiam nostrum magni iste inventore odit, quod! Ab inventore, pariatur. Repudiandae at maxime ipsam, deserunt deleniti facilis recusandae numquam quia modi, doloribus quasi rerum aliquid soluta fugiat aperiam sint! Suscipit sint voluptates esse omnis alias perspiciatis laborum harum, vero hic.</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="" alt="Kuvako"/>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam deleniti, aperiam nostrum magni iste inventore odit, quod! Ab inventore, pariatur. Repudiandae at maxime ipsam, deserunt deleniti facilis recusandae numquam quia modi, doloribus quasi rerum aliquid soluta fugiat aperiam sint! Suscipit sint voluptates esse omnis alias perspiciatis laborum harum, vero hic.</p>
                        </a>
                    </li>
                     <li>
                        <a href="#">
                            <img src="" alt="Kuvako"/>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam deleniti, aperiam nostrum magni iste inventore odit, quod! Ab inventore, pariatur. Repudiandae at maxime ipsam, deserunt deleniti facilis recusandae numquam quia modi, doloribus quasi rerum aliquid soluta fugiat aperiam sint! Suscipit sint voluptates esse omnis alias perspiciatis laborum harum, vero hic.</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="" alt="Kuvako"/>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam deleniti, aperiam nostrum magni iste inventore odit, quod! Ab inventore, pariatur. Repudiandae at maxime ipsam, deserunt deleniti facilis recusandae numquam quia modi, doloribus quasi rerum aliquid soluta fugiat aperiam sint! Suscipit sint voluptates esse omnis alias perspiciatis laborum harum, vero hic.</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@stop