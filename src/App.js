// import './db'
import './App.css';
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
} from "react-router-dom";
import Home from './components/Home';
import Menu from './components/Menu';
import Food from './components/Food';
import Profile from './components/Profile';


function App() {
    return (
        <Router>
            <div className="App d-flex" id="wrapper">

                {/*Sidebar*/}
                <div className="bg-light border-right" id="sidebar-wrapper">
                    <div className="sidebar-heading">OnlineOrd Admin</div>
                    <div className="list-group list-group-flush">
                        <Link to="/" className="list-group-item list-group-item-action bg-light">Головна</Link>
                        <Link to="/profile" className="list-group-item list-group-item-action bg-light">Профіль</Link>
                        <Link to="/menu" className="list-group-item list-group-item-action bg-light">Список Меню</Link>
                        <Link to="/food" className="list-group-item list-group-item-action bg-light">Страви</Link>
                    </div>
                </div>{/*#sidebar-wrapper*/}


                {/*Page Content*/}
                <div id="page-content-wrapper">
                    <nav className="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                        <ul className="navbar-nav ml-auto mt-2 mt-lg-0">
                            <Link to="/" className="btn btn-primary">Sign Out</Link>
                        </ul>
                    </nav>

                    <div className="container-fluid">
                        <Switch>
                            <Route path="/menu">
                                <Menu />
                            </Route>
                            <Route path="/food">
                                <Food />
                            </Route>
                            <Route path="/profile">
                                <Profile />
                            </Route>
                            <Route path="/">
                                <Home />
                            </Route>
                        </Switch>
                    </div>
                </div>{/*#page-content-wrapper*/}
            </div>{/*#wrapper*/}
        </Router>
    );
}

export default App;
