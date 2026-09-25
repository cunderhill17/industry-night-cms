import { createBrowserRouter, RouterProvider, Outlet } from 'react-router-dom'

import Home from './components/home';
import Header from './components/Header';

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
            { path: '/',           element: <Home /> },
        ]
    }
])



function App() {

  return (
    <RouterProvider router={router} />
  )
}

export default App