<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>British Library</title>
        <!-- favicon -->
        <x-jet-application-logo/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased" >
        <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-success text-gray-300 ">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary text-gray-300 ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 btn btn-danger text-gray-300 ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 ">
                  <img src="{{url('https://www.tonishatagoe.com/wp-content/uploads/2020/05/the-british-library-logo.png')}}" width="350" height="80">
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 ">
                        <div class="p-6 p-3 mb-2 bg-dark text-white">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold"><h3>Leonardo Da Vinci Resource</h3>(Updated May 2021)</div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-800 dark:text-gray-400  ">
                                    British Library Catalogue Datasets in RDF and CSV
                                    This usage guide is based on goodwill. It is not a legal contract. We ask that you respect it.
                                    Use of data: This data is being made available under a Creative Commons CC0 1.0 Universal Public Domain
                                    Dedication licence. This means that the British Library Board makes no copyright, related or neighbouring
                                    rights claims to the data and does not apply any restrictions on subsequent use and reuse of the data.
                                    Support: The British Library is committed to providing high quality services and accurate data. If you have any
                                    queries or identify any problems with the data please contact metadata@bl.uk.
                                    Share knowledge: We are also very interested to hear the ways in which you have used this data so we can
                                    understand more fully the benefits of sharing it and improve our services. Please contact metadata@bl.uk if
                                    you wish to share your experiences with us and those that are using this service.
                                    Give credit where credit is due: The British Library has a responsibility to maintain its bibliographic data on
                                    the nation’s behalf. Please credit all use of this data to the British Library and link back to www.bl.uk/collectionmetadata in order that this information can be shared and developed with today’s Internet users as well as
                                    future generations.
                                    Do not misrepresent the dataset: Do not mislead others or misrepresent the dataset or its source. You must
                                    not use the British Library’s trademarks or otherwise claim or imply that the British Library endorses you or your
                                    use of the dataset. Whenever you transform, translate or otherwise modify the dataset, you must make clear
                                    that the resulting information has been modified by you. If you enrich or otherwise modify the dataset, consider
                                    publishing the derived dataset without reuse restrictions.
                                    Liability: The British Library accepts no liability for damages from any use of the supplied data. For more
                                    detail please see the terms of the Creative Commons CC0 1.0 Universal Public Domain Dedication licence.
                                    This usage guide is based on best practice developed by the Open Data community.
                                    Other options available for British Library Catalogue Metadata
                                    For details and licensing terms about other open data options, please visit our Metadata Services page or
                                    contact metadata@bl.uk. If you are interested in priced services for commercial use, please contact our
                                    marketing team.<br>
                                   <b>The British Library <br>
                                    Collection Metadata<br>
                                    Boston Spa, Wetherby<br>
                                    West Yorkshire<br>
                                    LS23 7BQ United Kingdom<br>
                                       Email: metadata@bl.uk<br></b>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </body>
</html>
