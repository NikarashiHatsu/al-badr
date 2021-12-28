@extends('layouts.guest')

@section('content')
<section class="pager-section">
    <div class="container">
        <div class="pager-content text-center">
            <h2>Blog</h2>
            <ul>
                <li><a href="#" title="">Home</a></li>
                <li><span>Blog</span></li>
            </ul>
        </div><!--pager-content end-->
        <h2 class="page-titlee">Al Badr</h2>
    </div>
</section><!--pager-section end-->

<section class="page-content">
    <div class="container mx-auto">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-section p-0 posts-page">
                    <div class="blog-posts">
                        <x-blog.standard />
                        <x-blog.standard />
                        <x-blog.without-image />
                        <x-blog.gallery />
                        <x-blog.quote />
                        <x-blog.quote-no-bg />
                        <x-blog.video />
                        <x-blog.title-less />
                        <x-blog.chat />
                        <x-blog.title-only />
                    </div>
                </div>

                <div class="mdp-pagiation">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link active" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">15</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="widget widget-search">
                        <form>
                            <input type="text" name="search" placeholder="Search">
                            <button type="submit"><img src="assets/img/icon4.png" alt=""></button>
                        </form>
                    </div>

                    <x-blog.categories />
                    <x-blog.latest-posts />
                    <x-blog.latest-comments />
                    <div class="widget widget-archives">
                        <h3 class="widget-title">Archives</h3>
                        <ul>
                            <li>
                                <a href="#" title="">December</a>
                            </li>
                            <li>
                                <a href="#" title="">January</a>
                            </li>
                            <li>
                                <a href="#" title="">February</a>
                            </li>
                            <li>
                                <a href="#" title="">March</a>
                            </li>
                        </ul>
                    </div><!--widget-archives end-->
                    <div class="widget widget-tags">
                        <h3 class="widget-title">Tags</h3>
                        <ul>
                            <li>
                                <a href="#" title="">Teachers</a>
                            </li>
                            <li>
                                <a href="#" title="">Lessons</a>
                            </li>
                            <li>
                                <a href="#" title="">Shelly</a>
                            </li>
                            <li>
                                <a href="#" title="">School</a>
                            </li>
                            <li>
                                <a href="#" title="">Theme</a>
                            </li>
                            <li>
                                <a href="#" title="">Class</a>
                            </li>
                        </ul>
                    </div><!--widget-tags end-->
                    <div class="widget widget-calendar">
                        <h3 class="widget-title">Calendar</h3>
                        <div class="mdp-calendar">
                            <h3 class="month">July 2020</h3>
                            <table>
                                <thead>
                                    <tr>
                                        <th>S</th>
                                        <th>M</th>
                                        <th>T</th>
                                        <th>W</th>
                                        <th>T</th>
                                        <th>F</th>
                                        <th>S</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td class="active">6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>13</td>
                                        <td>14</td>
                                        <td>15</td>
                                        <td>16</td>
                                        <td>17</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>20</td>
                                        <td>21</td>
                                        <td>22</td>
                                        <td>23</td>
                                        <td>24</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>27</td>
                                        <td>28</td>
                                        <td>29</td>
                                        <td>30</td>
                                        <td>31</td>
                                    </tr>
                                </tbody>
                            </table>
                            <ul class="controls">
                                <li>
                                    <a href="#" title=""><i class="fa fa-angle-left"></i> Prev</a>
                                </li>
                                <li>
                                    <a href="#" title="">Next <i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div><!--mdp-calendar end-->
                    </div><!--widget-calendar end-->
                </div><!--sidebar end-->
            </div>
        </div>
    </div>
</section><!--page-content end-->

<section class="newsletter-section">
    <div class="container">
        <div class="newsletter-sec">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="newsz-ltr-text">
                        <h2>Join us <br /> and stay tuned!</h2>
                        <a href="#" title="" class="btn-default">Join Us <i class="fa fa-long-arrow-alt-right"></i></a>
                    </div><!--newsz-ltr-text end-->
                </div>
                <div class="col-lg-8">
                    <form class="newsletter-form">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name">
                                </div><!--form-group end-->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email">
                                </div><!--form-group end-->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group select-tg">
                                    <select>
                                        <option>Class</option>
                                        <option>Class</option>
                                        <option>Class</option>
                                        <option>Class</option>
                                        <option>Class</option>
                                        <option>Class</option>
                                    </select>
                                </div><!--form-group end-->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div><!--form-group end-->
                            </div>
                        </div>
                    </form><!--newsletter-form end-->
                </div>
            </div>
        </div><!--newsletter-sec end-->
    </div>
</section><!--newsletter-sec end-->
@endsection