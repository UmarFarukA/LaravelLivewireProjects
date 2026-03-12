import StageSidebar from "@/Components/StageSidebar";
import DashboardLayout from "@/Layouts/DashboardLayout";

function ApplicationLayout({ application, stages, children }) {
    return (
        <div className="grid grid-cols-12 gap-6">
            <div className="col-span-3">
                {/* Sidebar */}
                <StageSidebar stages={stages} application={application} />

                {/* Main Content */}
                <div className="col-span-9">
                    <div className="bg-white rounded-lg shadow p-6">
                        {children}
                    </div>
                </div>
            </div>
        </div>
    );
}

export default ApplicationLayout;
