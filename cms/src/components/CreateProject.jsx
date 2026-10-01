import { NavLink } from 'react-router-dom';

export default function CreateProject() {
    return (
        <section className="creationpage top-mob-margin-md">
            <div className="title-banner">
                <NavLink className="backlink" to="/projects">&larr; Back</NavLink>
                <h2>CREATE PROJECT</h2>
                <h3>STUDENT PROJECT ENTRY</h3>
            </div>

            <label>
                <span>Project Name</span>
                <input type="text" />
            </label>

            <label>
                <span>Course</span>
                <input type="text" />
            </label>

            <label>
                <span>Semester</span>
                <input type="text" />
            </label>

            <label>
                <span>Description</span>
                <textarea type="text" />
            </label>

            <label>
                <span>Image</span>
                <input type="file" />
            </label>

            <div className="btn-con">
                <button>Save</button>
                <button>Publish</button>
                <button>Cancel</button>
            </div>
        </section>
    )
}