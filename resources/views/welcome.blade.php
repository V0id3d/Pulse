@extends('layouts.default')

@section('PageContent')
    <picture href="/assets/QZPulse.svg"></picture>
    <div class="container-fluid">
        {{--Grid Section--}}
        <section id="grid">
            <h3>Grid</h3>
            <p>
                Pulse utilizes flexbox for out grid system with a fallback on the traditional bootstrap grid system and
                as such you will notice that the naming convention for the grids is the same as bootstrap with a few
                minor exceptions
            </p>

            <h4>Grid { Syntax }</h4>
            <p>
                Very Simple syntax all you need to remember is .row > .col-{screen-size}-{number of columns} > content.
                It is the very same bootstrap code that you know and love.
            </p>

            <div class="row">
                <div class="col-md-12">
                    <pre><code>
        &lt;div class="row">
            &lt;div class="col-xs-12">
                &lt;div class="box">12&lt;/div>
            &lt;/div>
        &lt;/div>
                        </code></pre>
                </div>
            </div>

            <hr />

            <h4>Grid { Responsive }</h4>
            <p>
                Responsive modifiers enable specifying different column sizes, offsets, alignment and distribution at xs,
                sm, md &amp; lg viewport widths.
            </p>

            {{--Examples--}}
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-2 col-lg-1">
                    <div class="demo__box demo__box--row"></div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-8 col-lg-10">
                    <div class="demo__box demo__box--row"></div>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-1">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-2 col-lg-1">
                    <div class="demo__box demo__box--row"></div>
                </div>
                <div class="col-xs-12 col-sm-9 col-md-10 col-lg-11">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-sm-6 col-md-8 col-lg-10">
                    <div class="demo__box demo__box--row"></div>
                </div>
                <div class="col-xs-2 col-sm-6 col-md-4 col-lg-2">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>

            {{--Code--}}
            <div class="row">
                <div class="col-md-12">
                    <pre><code>
        &lt;/div class="row">
            &lt;div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
                &lt;div class="box">Responsive&lt;/div>
            &lt;/div>
        &lt;/div>
                        </code></pre>
                </div>
            </div>

            <hr />

            <h4>Grid { Fluid }</h4>
            <p>
                Percent based widths allow fluid resizing of columns and rows.
            </p>

            {{--Examples--}}
            <div class="row">
                <div class="col-xs-12">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-1">
                    <div class="demo__box demo__box--row"></div>
                </div>
                <div class="col-xs-11">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2">
                    <div class="demo__box demo__box--row"></div>
                </div>
                <div class="col-xs-10">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3">
                    <div class="demo__box demo__box--row"></div>
                </div>
                <div class="col-xs-9">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <div class="demo__box demo__box--row"></div>
                </div>
                <div class="col-xs-8">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-5">
                    <div class="demo__box demo__box--row"></div>
                </div>
                <div class="col-xs-7">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <div class="demo__box demo__box--row"></div>
                </div>
                <div class="col-xs-6">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>

            {{--Code--}}
            <div class="row">
                <div class="col-md-12">
                    <pre><code>
        .col-xs-6 {
            flex-basis: 50%;
        }
                        </code></pre>
                </div>
            </div>

            <hr />

            <h4>Grid { Auto }</h4>
            <p>
                Add any number of auto sizing columns to a row. Let the grid figure it out.
            </p>

            {{--Examples--}}
            <div class="row">
                <div class="col-xs">
                    <div class="demo__box demo__box--row"></div>
                </div>
                <div class="col-xs">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs">
                    <div class="demo__box demo__box--row"></div>
                </div>
                <div class="col-xs">
                    <div class="demo__box demo__box--row"></div>
                </div>
                <div class="col-xs">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>

            {{--Code--}}
            <div class="row">
                <div class="col-md-12">
                    <pre><code>
        &lt;div class="row">
            &lt;div class="col-xs">
                &lt;div class="box">auto&lt;/div>
            &lt;/div>
        &lt;/div>
                        </code></pre>
                </div>
            </div>

            <hr />

            <h4>Grid { Offsets }</h4>
            <p>
                Offsetting Columns is done in a very simple way as well
            </p>

            {{--Examples--}}
            <div class="row">
                <div class="offset-xs-11 col-xs-1">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>
            <div class="row">
                <div class="offset-xs-10 col-xs-2">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>
            <div class="row">
                <div class="offset-xs-9 col-xs-3">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>
            <div class="row">
                <div class="offset-xs-8 col-xs-4">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>
            <div class="row">
                <div class="offset-xs-7 col-xs-5">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>
            <div class="row">
                <div class="offset-xs-6 col-xs-6">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>
            <div class="row">
                <div class="offset-xs-5 col-xs-7">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>
            <div class="row">
                <div class="offset-xs-4 col-xs-8">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>
            <div class="row">
                <div class="offset-xs-3 col-xs-9">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>
            <div class="row">
                <div class="offset-xs-2 col-xs-10">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>
            <div class="row">
                <div class="offset-xs-1 col-xs-11">
                    <div class="demo__box demo__box--row"></div>
                </div>
            </div>

            {{--Code--}}
            <div class="row">
                <div class="col-md-12">
                    <pre><code>
    &lt;div class="row">
        &lt;div class="offset-xs-3 col-xs-9">
            &lt;div class="box">offset&lt;/div>
        &lt;/div>
    &lt;/div>
                        </code></pre>
                </div>
            </div>

            <hr />

            <h4>Grid { Nested }</h4>
            <p>
                Nest grids inside grids inside grids.
            </p>

            {{--Examples--}}
            <div class="row" style="margin-bottom: 15px;">
                <div class="col-xs-7">
                    <div class="box box-container">
                        <div class="row">
                            <div class="col-xs-9">
                                <div class="demo__box demo__box--first demo__box--box-container">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="demo__box demo__box--nested"></div>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="demo__box demo__box--nested"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="demo__box demo__box--first demo__box--box-container">
                                    <div class="row">
                                        <div class="col-xs">
                                            <div class="demo__box demo__box--nested"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-5">
                    <div class="box box-container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="demo__box demo__box--first demo__box--box-container">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="demo__box demo__box--nested"></div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="demo__box demo__box--nested"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--Code--}}
            <div class="row">
                <div class="col-md-12">
                    <pre><code>
    &lt;div class="row">
        &lt;div class="col-xs">
            &lt;div class="box">
                &lt;div class="row">
                    &lt;div class="col-xs">
                        &lt;div class="box">auto&lt;/div>
                    &lt;/div>
                &lt;/div>
            &lt;/div>
        &lt;/div>
    &lt;/div>
                        </code></pre>
                </div>
            </div>

        </section>

        {{--Alerts Section--}}
        <section id="alerts">
            <h3>Alerts</h3>
            <p>
                Alerts will be used all around your application to signal to the user any variety of things from errors
                to warnings. Pulse comes with an alert component that will accept a type being error, warning, success,
                and info and the styles can be found in _alerts.scss. You can also modify just the colors in your own
                _custom.scss with variable names $alert-{type}-bg, $alert-{type}-border, $alert-{type}-text.
            </p>
            <h4>Alerts { Basic }</h4>
            <div class="row">
                {{--Error Alert Example--}}
                <div class="col-md-3">
                    <qz-alert type="error" transition="bounce">
                        Example
                    </qz-alert>
                </div>

                {{--Warning Alert Example--}}
                <div class="col-md-3">
                    <qz-alert type="warning">
                        Example
                    </qz-alert>
                </div>

                {{--Success Alert Example--}}
                <div class="col-md-3">
                    <qz-alert type="success">
                        Example
                    </qz-alert>
                </div>

                {{--Info Alert Example--}}
                <div class="col-md-3">
                    <qz-alert type="info">
                        Example
                    </qz-alert>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <pre><code>
    &lt;qz-alert type="error" display>
        Example
    &lt;/qz-alert>
                </code></pre>
                </div>
            </div>
            <hr />
            <h4>Alerts { Headings }</h4>
            <div class="row">
                {{--Error Alert Example--}}
                <div class="col-md-3">
                    <qz-alert type="error" heading>
                        Example
                    </qz-alert>
                </div>

                {{--Warning Alert Example--}}
                <div class="col-md-3">
                    <qz-alert type="warning" heading>
                        Example
                    </qz-alert>
                </div>

                {{--Success Alert Example--}}
                <div class="col-md-3">
                    <qz-alert type="success" heading>
                        Example
                    </qz-alert>
                </div>

                {{--Info Alert Example--}}
                <div class="col-md-3">
                    <qz-alert type="info" heading>
                        Example
                    </qz-alert>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <pre><code>
    &lt;qz-alert type="error" heading display>
        Example
    &lt;/qz-alert>
                </code></pre>
                </div>
            </div>
        </section>

        {{--Tables Section--}}
        <section id="tables">
            <h3>Tables</h3>
            <p>
                You will use tables in many places in your project when you need to show records of data. Before you
                decide that you are going to use a table you may want to think if a list would complete the task better.
                you should not attempt to use tables to arrange items for a purely ascetic purpose as that is what we
                have our grid system for.
            </p>
            {{--Basic Table--}}
            <div id="basicTable" class="row">
                <div class="col-md-12">
                    <h4>Table { Basic }</h4>
                    <p>
                        This is just your standard table without any modifiers added to it, so the default.
                    </p>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                            <th>Column 4</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>Row 1 Column 1</td>
                            <td>Row 1 Column 2</td>
                            <td>Row 1 Column 3</td>
                            <td>Row 1 Column 4</td>
                        </tr>
                        <tr>
                            <td>Row 2 Column 1</td>
                            <td>Row 2 Column 2</td>
                            <td>Row 2 Column 3</td>
                            <td>Row 2 Column 4</td>
                        </tr>
                        <tr>
                            <td>Row 3 Column 1</td>
                            <td>Row 3 Column 2</td>
                            <td>Row 3 Column 3</td>
                            <td>Row 3 Column 4</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <pre><code>
    &lt;table class="table">
        &lt;thead>
            &lt;tr>
                &lt;th>Column 1&lt;/td>
                . . .
            &lt;/tr>
        &lt;/thead>
        &lt;tbody>
            &lt;tr>
                &lt;td>Row 1 Column 1&lt;/td>
                . . .
            &lt;/tr>
        &lt;/tbody>
    &lt;/table>
                        </code></pre>
                </div>
            </div>

            <hr />

            {{--Small Table--}}
            <div id="smTable" class="row">
                <div class="col-md-12">
                    <h4>Table { Small }</h4>
                    <p>
                        This is a standard table with a small modifier.
                    </p>
                    <table class="table table--sm">
                        <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                            <th>Column 4</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>Row 1 Column 1</td>
                            <td>Row 1 Column 2</td>
                            <td>Row 1 Column 3</td>
                            <td>Row 1 Column 4</td>
                        </tr>
                        <tr>
                            <td>Row 2 Column 1</td>
                            <td>Row 2 Column 2</td>
                            <td>Row 2 Column 3</td>
                            <td>Row 2 Column 4</td>
                        </tr>
                        <tr>
                            <td>Row 3 Column 1</td>
                            <td>Row 3 Column 2</td>
                            <td>Row 3 Column 3</td>
                            <td>Row 3 Column 4</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <pre><code>
    &lt;table class="table table--sm">
        &lt;thead>
            &lt;tr>
                &lt;th>Column 1&lt;/td>
                . . .
            &lt;/tr>
        &lt;/thead>
        &lt;tbody>
            &lt;tr>
                &lt;td>Row 1 Column 1&lt;/td>
                . . .
            &lt;/tr>
        &lt;/tbody>
    &lt;/table>
                        </code></pre>
                </div>
            </div>

            <hr />

            {{--Bordered Table--}}
            <div id="borderedTable" class="row">
                <div class="col-md-12">
                    <h4>Table { Bordered }</h4>
                    <p>
                        This is a standard table with a bordered modifier added to it giving you the border lines on the
                        left and the right of your table.
                    </p>
                    <table class="table table--bordered">
                        <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                            <th>Column 4</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>Row 1 Column 1</td>
                            <td>Row 1 Column 2</td>
                            <td>Row 1 Column 3</td>
                            <td>Row 1 Column 4</td>
                        </tr>
                        <tr>
                            <td>Row 2 Column 1</td>
                            <td>Row 2 Column 2</td>
                            <td>Row 2 Column 3</td>
                            <td>Row 2 Column 4</td>
                        </tr>
                        <tr>
                            <td>Row 3 Column 1</td>
                            <td>Row 3 Column 2</td>
                            <td>Row 3 Column 3</td>
                            <td>Row 3 Column 4</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <pre><code>
    &lt;table class="table table--bordered">
        &lt;thead>
            &lt;tr>
                &lt;th>Column 1&lt;/td>
                . . .
            &lt;/tr>
        &lt;/thead>
        &lt;tbody>
            &lt;tr>
                &lt;td>Row 1 Column 1&lt;/td>
                . . .
            &lt;/tr>
        &lt;/tbody>
    &lt;/table>
                        </code></pre>
                </div>
            </div>

            <hr />

            {{--Striped Table--}}
            <div id="stripedTable" class="row">
                <div class="col-md-12">
                    <h4>Table { Striped }</h4>
                    <p>
                        This is a standard table with a striped modifier you can adjust the colors with your _custom.scss
                        file that you have made. This will make every other row alternate in color.
                    </p>
                    <table class="table table--striped">
                        <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                            <th>Column 4</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>Row 1 Column 1</td>
                            <td>Row 1 Column 2</td>
                            <td>Row 1 Column 3</td>
                            <td>Row 1 Column 4</td>
                        </tr>
                        <tr>
                            <td>Row 2 Column 1</td>
                            <td>Row 2 Column 2</td>
                            <td>Row 2 Column 3</td>
                            <td>Row 2 Column 4</td>
                        </tr>
                        <tr>
                            <td>Row 3 Column 1</td>
                            <td>Row 3 Column 2</td>
                            <td>Row 3 Column 3</td>
                            <td>Row 3 Column 4</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <pre><code>
    &lt;table class="table table--striped">
        &lt;thead>
            &lt;tr>
                &lt;th>Column 1&lt;/td>
                . . .
            &lt;/tr>
        &lt;/thead>
        &lt;tbody>
            &lt;tr>
                &lt;td>Row 1 Column 1&lt;/td>
                . . .
            &lt;/tr>
        &lt;/tbody>
    &lt;/table>
                        </code></pre>
                </div>
            </div>

            <hr />

            {{--Hover Table--}}
            <div id="hoverTable" class="row">
                <div class="col-md-12">
                    <h4>Table { Hover }</h4>
                    <p>
                        This is a standard table with a hover modifier you can adjust the colors with your _custom.scss
                        file that you have made. This will change the color based on mouse over.
                    </p>
                    <table class="table table--hover">
                        <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                            <th>Column 4</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>Row 1 Column 1</td>
                            <td>Row 1 Column 2</td>
                            <td>Row 1 Column 3</td>
                            <td>Row 1 Column 4</td>
                        </tr>
                        <tr>
                            <td>Row 2 Column 1</td>
                            <td>Row 2 Column 2</td>
                            <td>Row 2 Column 3</td>
                            <td>Row 2 Column 4</td>
                        </tr>
                        <tr>
                            <td>Row 3 Column 1</td>
                            <td>Row 3 Column 2</td>
                            <td>Row 3 Column 3</td>
                            <td>Row 3 Column 4</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <pre><code>
    &lt;table class="table table--hover">
        &lt;thead>
            &lt;tr>
                &lt;th>Column 1&lt;/td>
                . . .
            &lt;/tr>
        &lt;/thead>
        &lt;tbody>
            &lt;tr>
                &lt;td>Row 1 Column 1&lt;/td>
                . . .
            &lt;/tr>
        &lt;/tbody>
    &lt;/table>
                        </code></pre>
                </div>
            </div>

            <hr />

            {{--Inverse Table--}}
            <div id="inverseTable" class="row">
                <div class="col-md-12">
                    <h4>Table { Inverse }</h4>
                    <p>
                        This is a standard table with an inverse modifier you can adjust the colors with your _custom.scss
                        file that you have made. This will take the table and make the background dark gray and color of
                        the font light gray.
                    </p>
                    <table class="table table--inverse">
                        <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                            <th>Column 4</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>Row 1 Column 1</td>
                            <td>Row 1 Column 2</td>
                            <td>Row 1 Column 3</td>
                            <td>Row 1 Column 4</td>
                        </tr>
                        <tr>
                            <td>Row 2 Column 1</td>
                            <td>Row 2 Column 2</td>
                            <td>Row 2 Column 3</td>
                            <td>Row 2 Column 4</td>
                        </tr>
                        <tr>
                            <td>Row 3 Column 1</td>
                            <td>Row 3 Column 2</td>
                            <td>Row 3 Column 3</td>
                            <td>Row 3 Column 4</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <pre><code>
    &lt;table class="table table--inverse">
        &lt;thead>
            &lt;tr>
                &lt;th>Column 1&lt;/td>
                . . .
            &lt;/tr>
        &lt;/thead>
        &lt;tbody>
            &lt;tr>
                &lt;td>Row 1 Column 1&lt;/td>
                . . .
            &lt;/tr>
        &lt;/tbody>
    &lt;/table>
                        </code></pre>
                </div>
            </div>

            <hr />

            {{--Reponsive Table--}}
            <div id="inverseTable" class="row">
                <div class="col-md-12">
                    <h4>Table { Responsive }</h4>
                    <p>
                        This is more of a wrapper for your table element. Wrap your table in a div and it will put the
                        horizontal scroll bars to the div. NEEDS WORK!
                    </p>
                    <div class="table--responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Column 1</th>
                                <th>Column 2</th>
                                <th>Column 3</th>
                                <th>Column 4</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>Row 1 Column 1</td>
                                <td>Row 1 Column 2</td>
                                <td>Row 1 Column 3</td>
                                <td>Row 1 Column 4</td>
                            </tr>
                            <tr>
                                <td>Row 2 Column 1</td>
                                <td>Row 2 Column 2</td>
                                <td>Row 2 Column 3</td>
                                <td>Row 2 Column 4</td>
                            </tr>
                            <tr>
                                <td>Row 3 Column 1</td>
                                <td>Row 3 Column 2</td>
                                <td>Row 3 Column 3</td>
                                <td>Row 3 Column 4</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12">
                    <pre><code>
    &lt;div class="table--responsive">
        &lt;table class="table">
            &lt;thead>
                &lt;tr>
                    &lt;th>Column 1&lt;/td>
                    . . .
                &lt;/tr>
            &lt;/thead>
            &lt;tbody>
                &lt;tr>
                    &lt;td>Row 1 Column 1&lt;/td>
                    . . .
                &lt;/tr>
            &lt;/tbody>
        &lt;/table>
    &lt;/div>
                        </code></pre>
                </div>
            </div>

        </section>

        {{--Form Controls--}}
        <section id="forms">
            <h3>Forms & Form Controls</h3>
            <p>
                Forms are used for user input and will be seen throughout your application whenever you need to get some
                type of user interaction.
            </p>
            <div id="basicForm" class="row">
                <div class="col-md-12">
                    <h4>Form / Form Controls { Basic }</h4>
                    {{-- Basic Form --}}
                    <form action="#" id="basicForm" class="form-horizontal" method="POST">
                        {{ csrf_field() }}
                        {{--Contains Text, Email, Password Examples--}}
                        <div class="row form__group">
                            {{--Text Box Example Text Field--}}
                            <div class="col-md-4 {{ $errors->basicForm->has('textExample') ? 'has-error' : '' }}">
                                <span class="form__text">
                                    <label for="textExample" class="form-control__label">Text Box Example</label>
                                </span>
                                <input type="text" name="textExample" id="textExample" class="form-control"
                                        placeholder="Just a basic text example"
                                        value="{{ old('textExample') }}"/>
                                @if($errors->basicForm->has('textExample'))
                                    <span class="form__text">
                                        <strong><small>{{ $errors->basicForm->first('textExample') }}</small></strong>
                                    </span>
                                @endif
                            </div>
                            {{--Email Box Example Email Field--}}
                            <div class="col-md-4 {{ $errors->basicForm->has('emailExample') ? 'has-error' : '' }}">
                                <span class="form__text">
                                    <label for="emailExample" class="form-control__label">Email Box Example</label>
                                </span>
                                <input type="email" name="emailExample" id="emailExample" class="form-control"
                                        placeholder="name@example.com" value="{{ old('emailExample') }}"/>
                                @if($errors->basicForm->has('emailExample'))
                                    <span class="form__text">
                                        <strong><small>{{ $errors->basicForm->first('emailExample') }}</small></strong>
                                    </span>
                                @endif
                            </div>
                            {{--Password Box Example Password Field--}}
                            <div class="col-md-4 {{ $errors->basicForm->has('passwordExample') ? 'has-error' : '' }}">
                                <span class="form__text">
                                    <label for="passwordExample"
                                            class="form-control__label">Password Box Example</label>
                                </span>
                                <input type="password" name="passwordExample" id="passwordExample" class="form-control"
                                        placeholder="Enter Password"/>
                                @if($errors->basicForm->has('passwordExample'))
                                    <span class="form__text">
                                        <strong><small>{{ $errors->basicForm->first('passwordExample') }}</small></strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{--Contains Checkbox, Select (Single), Select (Multi) Examples--}}
                        <div class="row form__group">
                            {{--Checkbox Example Checkbox Field--}}
                            <div class="col-md-4 {{ $errors->basicForm->has('checkboxExample') ? 'has-error' : '' }}">
                                <div class="">
                                    <legend class="form-control__legend">Checkboxes</legend>
                                    <div class="form__check">
                                        <input type="checkbox" name="checkboxExample1" id="checkboxExample1"
                                                class="form__check__inline"
                                                value="{{ old('checkboxExample1') }}"/>
                                        <label for="checkboxExample1" class="form__check__label">Checkbox Example 1</label>
                                        @if($errors->basicForm->has('checkboxExample1'))
                                            <span class="form__text">
                                                <strong><small>{{ $errors->basicForm->first('checkboxExample1') }}</small></strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form__check">
                                        <input type="checkbox" name="checkboxExample2" id="checkboxExample2"
                                                class="form__check__inline"
                                                value="{{ old('checkboxExample2') }}"/>
                                        <label for="checkboxExample2" class="form__check__label">Checkbox Example 2</label>
                                        @if($errors->basicForm->has('checkboxExample2'))
                                            <span class="form__text">
                                                <strong><small>{{ $errors->basicForm->first('checkboxExample2') }}</small></strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form__check">
                                        <input type="checkbox" name="checkboxExample3" id="checkboxExample3"
                                                class="form__check__inline"
                                                value="{{ old('checkboxExample3') }}"/>
                                        <label for="checkboxExample3" class="form__check__label">Checkbox Example 3</label>
                                        @if($errors->basicForm->has('checkboxExample3'))
                                            <span class="form__text">
                                                <strong><small>{{ $errors->basicForm->first('checkboxExample3') }}</small></strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form__check">
                                        <input type="checkbox" name="checkboxExample4" id="checkboxExample4"
                                                class="form__check__inline"
                                                value="{{ old('checkboxExample4') }}"/>
                                        <label for="checkboxExample4" class="form__check__label">Checkbox Example 4</label>
                                        @if($errors->basicForm->has('checkboxExample4'))
                                            <span class="form__text">
                                                <strong><small>{{ $errors->basicForm->first('checkboxExample4') }}</small></strong>
                                            </span>
                                        @endif
                                    </div>

                                </div>
                            </div>
                            {{--Selectbox Example Select Box--}}
                            <div class="col-md-4 {{ $errors->basicForm->has('selectBoxExample') ? 'has-error' : '' }}">
                                <span class="form__text">
                                    <label for="selectBoxExample" class="form-control__label">Selectbox Example</label>
                                </span>
                                <select name="selectBoxExample" id="selectBoxExample" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                @if($errors->basicForm->has('selectBoxExample'))
                                    <span class="form__text"><strong><small>{{ $errors->basicForm->first('selectBoxExample') }}</small></strong></span>
                                @endif
                            </div>
                            {{--Selectbox Multi Example Select Box--}}
                            <div class="col-md-4 {{ $errors->basicForm->has('selectBoxMultiExample') ? 'has-error' : '' }}">
                                <span class="form__text">
                                    <label for="selectBoxMultiExample" class="form-control__label">Selectbox Multi Example</label>
                                </span>
                                <select name="selectBoxMultiExample" id="selectBoxMultiExample" class="form-control" multiple>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                @if($errors->basicForm->has('selectBoxMultiExample'))
                                    <span class="form__text"><strong><small>{{ $errors->basicForm->first('selectBoxMultiExample') }}</small></strong></span>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        {{--Dropdown Section--}}
        <section id="dropdown" class="clearfix">
            <h3>Dropdowns</h3>
            <p>
                Dropdowns are toggleable, contextual overlays for displaying lists of links and more. They’re made
                interactive with the included JavaScript plugin. They’re toggled by clicking, not by hovering; this is
                an intentional design decision.
            </p>
            <div id="singleButtonDropdown" class="row">
                <div class="col-md-12">
                    <h4>Single Button Dropdown</h4>
                </div>

                <div class="col-md-6" style="min-height: 200px;">
                    <div class="dropdown open">
                        <button class="btn btn--secondary dropdown__toggle" type="button" id="dropdownMenuButton">
                            Dropdown button
                        </button>
                        <div class="dropdown__menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown__item" href="#">Action</a>
                            <a class="dropdown__item" href="#">Another action</a>
                            <a class="dropdown__item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <dropdown text="Dropdown" transition="flip--x">
                        <dropdown-item>Item 1</dropdown-item>
                        <dropdown-item>Item 2</dropdown-item>
                        <dropdown-item>Item 3</dropdown-item>
                    </dropdown>
                </div>
                <div class="col-md-12">
                    <pre><code>
    &lt;div class="dropdown open">
        &lt;button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton">
            Dropdown button
        &lt;/button>
        &lt;div class="dropdown__menu" aria-labelledby="dropdownMenuButton">
            &lt;a class="dropdown__item" href="#">Action&lt;/a>
            &lt;a class="dropdown__item" href="#">Another action&lt;/a>
            &lt;a class="dropdown__item" href="#">Something else here&lt;/a>
        &lt;/div>
    &lt;/div>
                        </code></pre>
            </div>
                </div>
        </section>
    </div>
@endsection

{{--<div class="row">--}}
{{--<div class="container">--}}
{{--<div class="col-md-12 demo">--}}
{{--<h2>Form Controls - Regular Form</h2>--}}
{{--<form action="" class="form">--}}
{{--Contains Text, Email, Password Example--}}
{{--<div class="row form__group">--}}
{{--Text Example Text Field--}}
{{--<div class="col-md-4 {{ $errors->errorBag->has('textExample') ? 'has-error' : '' }}">--}}
{{--<span class="form__text">--}}
{{--<label for="textExample" class="form-control__label">Text Example</label>--}}
{{--</span>--}}
{{--<input type="text" name="textExample" id="textExample" class="form-control" placeholder="Just example Text" value="{{ old('textExample') }}" />--}}
{{--@if($errors->errorBag->has('textExample'))--}}
{{--<span class="form__text"><strong><small>{{ $errors->errorBag->first('textExample') }}</small></strong></span>--}}
{{--@endif--}}
{{--</div>--}}
{{--Email Example Text Field--}}
{{--<div class="col-md-4 {{ $errors->errorBag->has('emailExample') ? 'has-error' : '' }}">--}}
{{--<span class="form__text">--}}
{{--<label for="emailExample" class="form-control__label">Email Example</label>--}}
{{--</span>--}}
{{--<input type="email" name="emailExample" id="emailExample" class="form-control"--}}
{{--placeholder="name@example.com" value="{{ old('emailExample') }}"/>--}}
{{--@if($errors->errorBag->has('emailExample'))--}}
{{--<span class="form__text">--}}
{{--<strong><small>{{ $errors->errorBag->first('emailExample') }}</small></strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--Password Example Password Field--}}
{{--<div class="col-md-4 {{ $errors->errorBag->has('passwordExample') ? 'has-error' : '' }}">--}}
{{--<span class="form__text">--}}
{{--<label for="passwordExample" class="form-control__label">Password Example</label>--}}
{{--</span>--}}
{{--<input type="password" name="passwordExample" id="passwordExample" class="form-control"--}}
{{--placeholder="Enter Password"/>--}}
{{--@if($errors->errorBag->has('passwordExample'))--}}
{{--<span class="form__text">--}}
{{--<strong><small>{{ $errors->errorBag->first('passwordExample') }}</small></strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--Contains Checkbox and Select Examples--}}
{{--<div class="row form__group">--}}
{{--Checkbox Example Checkbox Field--}}
{{--<div class="col-md-4 {{ $errors->errorBag->has('checkboxExample') ? 'has-error' : '' }}">--}}
{{--<input type="checkbox" name="checkboxExample" id="checkboxExample"--}}
{{--class="form-control__check"--}}
{{--value="{{ old('checkboxExample') }}"/>--}}
{{--<label for="checkboxExample" class="form-control__label">Checkbox Example</label>--}}
{{--@if($errors->errorBag->has('checkboxExample'))--}}
{{--<span class="form__text">--}}
{{--<strong><small>{{ $errors->errorBag->first('checkboxExample') }}</small></strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--Single Select Example Select Box--}}
{{--<div class="col-md-4 {{ $errors->errorBag->has('singleSelectExample') ? 'has-error' : '' }}">--}}
{{--<span class="form__text">--}}
{{--<label for="singleSelectExample" class="form-control__label">Single Select Example</label>--}}
{{--</span>--}}
{{--<select name="singleSelectExample" id="singleSelectExample" class="form-control">--}}
{{--<option value="1">1</option>--}}
{{--<option value="2">2</option>--}}
{{--<option value="3">3</option>--}}
{{--</select>--}}
{{--@if($errors->errorBag->has('singleSelectExample'))--}}
{{--<span class="form__text"><strong><small>{{ $errors->errorBag->first('singleSelectExample') }}</small></strong></span>--}}
{{--@endif--}}
{{--</div>--}}
{{--Multiple Select Example Select Box--}}
{{--<div class="col-md-4 {{ $errors->errorBag->has('multiSelectExample') ? 'has-error' : '' }}">--}}
{{--<span class="form__text">--}}
{{--<label for="multiSelectExample" class="form-control__label">Multiple Select Example</label>--}}
{{--</span>--}}
{{--<select name="multiSelectExample" id="multiSelectExample" class="form-control" multiple>--}}
{{--<option value="1">1</option>--}}
{{--<option value="2">2</option>--}}
{{--<option value="3">3</option>--}}
{{--<option value="4">4</option>--}}
{{--</select>--}}
{{--@if($errors->errorBag->has('multiSelectExample'))--}}
{{--<span class="form__text"><strong><small>{{ $errors->errorBag->first('multiSelectExample') }}</small></strong></span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--<pre>--}}
{{--<code>--}}
{{--&lt;form action="" class="form">--}}
{{--&lt;div class="row form__group">--}}
{{--&lt;div class="col-md-4">--}}
{{--&lt;span class="form__text">--}}
{{--&lt;label for="textExample" class="form-control__label">Text Example&lt;/label>--}}
{{--&lt;/span>--}}
{{--&lt;input type="text" name="textExample" id="textExample" class="form-control" placeholder="Text Example" />--}}
{{--&lt;/div>--}}
{{--. . .--}}
{{--&lt;/div>--}}
{{--&lt;div class="row form__group">--}}
{{--&lt;div class="col-md-4">--}}
{{--&lt;input type="checkbox" name="checkboxExample" id="checkboxExample" class="form-control__check"/>--}}
{{--&lt;label for="checkboxExample" class="form-control__label">Checkbox Example&lt;/label>--}}
{{--&lt;/div>--}}
{{--. . .--}}
{{--&lt;/div>--}}
{{--&lt;/form>--}}
{{--</code>--}}
{{--</pre>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="container">--}}
{{--<div class="col-md-12">--}}
{{--<h2>Buttons</h2>--}}
{{--</div>--}}

{{--<div class="row">--}}
{{--<div class="col-md-6"><h3 style="text-align: center;">Fill</h3></div>--}}
{{--<div class="col-md-6"><h3 style="text-align: center;">Outline</h3></div>--}}
{{--</div>--}}
{{--<div class="row" style="margin: 5px;">--}}
{{--<div class="col-md-6">--}}
{{--<button class="btn btn--primary">Example Primary</button>--}}
{{--</div>--}}
{{--<div class="col-md-6">--}}
{{--<button class="btn btn--primary-o">Example Primary Outline</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row" style="margin: 5px;">--}}
{{--<div class="col-md-6">--}}
{{--<button class="btn btn--secondary">Example Secondary</button>--}}
{{--</div>--}}
{{--<div class="col-md-6">--}}
{{--<button class="btn btn--secondary-o">Example Secondary Outline</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row" style="margin: 5px;">--}}
{{--<div class="col-md-6">--}}
{{--<button class="btn btn--info">Example Info</button>--}}
{{--</div>--}}
{{--<div class="col-md-6">--}}
{{--<button class="btn btn--info-o">Example Info Outline</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row" style="margin: 5px;">--}}
{{--<div class="col-md-6">--}}
{{--<button class="btn btn--success">Example Success</button>--}}
{{--</div>--}}
{{--<div class="col-md-6">--}}
{{--<button class="btn btn--success-o">Example Success Outline</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row" style="margin: 5px;">--}}
{{--<div class="col-md-6">--}}
{{--<button class="btn btn--warning">Example Warning</button>--}}
{{--</div>--}}
{{--<div class="col-md-6">--}}
{{--<button class="btn btn--warning-o">Example Warning Outline</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row" style="margin: 5px;">--}}
{{--<div class="col-md-6">--}}
{{--<button class="btn btn--danger">Example Danger</button>--}}
{{--</div>--}}
{{--<div class="col-md-6">--}}
{{--<button class="btn btn--danger-o">Example Danger Outline</button>--}}
{{--</div>--}}
{{--</div>--}}


{{--</div>--}}
{{--</div>--}}
{{--<div id="test" class="row">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-6">--}}
{{--<qz-alert type="error">--}}
{{--<h4 slot="heading"><i class="fa fa-times-circle"></i>&nbsp;Error</h4>--}}
{{--<strong>Test</strong> Testing first component--}}
{{--</qz-alert>--}}
{{--</div>--}}
{{--<div class="col-md-6">--}}
{{--<qz-alert type="error">--}}
{{--<strong>Test</strong> Testing first component--}}
{{--</qz-alert>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-md-6">--}}
{{--<qz-alert type="success">--}}
{{--<h4 slot="heading"><i class="fa fa-check-circle"></i>&nbsp;Success</h4>--}}
{{--<strong>Test</strong> Testing first component--}}
{{--</qz-alert>--}}
{{--</div>--}}
{{--<div class="col-md-6">--}}
{{--<qz-alert type="success">--}}
{{--<strong>Test</strong> Testing first component--}}
{{--</qz-alert>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
