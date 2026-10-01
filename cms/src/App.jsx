import { createBrowserRouter, RouterProvider, Outlet } from 'react-router-dom'

import Home from './components/Home';
import Header from './components/Header';
import Portfolios from './components/Portfolios';
import Projects from './components/Projects';
import CreatePortfolio from './components/CreatePortfolio';

function AppLayout() {
    return (
        <div className='grid-con'>
            <Header/>
            <main className='col-span-full md:col-span-5 lg:col-span-9'>
                <Outlet/>
            </main>                
        </div>
    )
}


const router = createBrowserRouter([
    { 
        element: <AppLayout />,

        children: [
            { path: '/',                element: <Home /> },
            { path: '/portfolios',      element: <Portfolios/>},
            { path: '/projects',        element: <Projects />},
            { path: '/create-portfolio',  element: <CreatePortfolio/>} 
        ]
    }
])



function App() {

  return (
    <RouterProvider router={router} />
  )
}

export default App