<html>
    <head>
        <title>Dashboard Admin</title>
    </head>
    <body>
        <div>
            <ul>
                <li>Home</li>
                <li>Blog Post</li>
                <li>Cat List</li>
                <li>Shelter List</li>
                <li>Adopter List</li>
                <li>
                    <form action="{{ route("admin.logout") }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
        <div style="float:left;background:#ccc">
            <h3>Total of Cats</h3>
            <table>
                <tr>
                    <td>Unadopted Cat</td>
                    <td>Adopted Cat</td>
                </tr>
                <tr>
                    <td>{{ $total_of_cat['unadopted'] }}</td>
                    <td>{{ $total_of_cat['adopted'] }}</td>
                </tr>
            </table>
        </div>
        <div style="float:left;background:#777">
            <table>
                <tr>
                    <td>Total of Blog</td>
                    <td>Total of Shelter</td>
                    <td>Total of Adopter</td>
                </tr>
                <tr>
                    <td>{{ $total_blog }}</td>
                    <td>{{ $total_shelter }}</td>
                    <td>{{ $total_adopter }}</td>
                </tr>
            </table>
        </div>
        <div style="clear: both"></div>
        <div>
            <h3>Recent Adoption List</h3>
            <table>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
                <?php $no = 1; ?>
                @foreach ($recent_adoption as $adoption)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->content }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div style="clear: both"></div>
        <div>
            <h3>Recent Blog List</h3>
            <table>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
                <?php $no = 1; ?>
                @foreach ($recent_blog as $blog)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->content }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>