import { Link, usePage } from "@inertiajs/react";

function StageSidebar({ stages = [], application }) {
    const { url } = usePage();

    // 🔥 Determine current stage index
    const currentIndex = stages.findIndex(
        (stage) => !stage.is_completed
    );

    return (
        <aside className="w-full bg-white border rounded-lg p-4">

            <h3 className="font-semibold text-gray-700 mb-4">
                Application Steps
            </h3>

            <ul className="space-y-2">
                {stages.map((stage, index) => {

                    const isCompleted = stage.is_completed;
                    const isCurrent = index === currentIndex;
                    const isLocked = index > currentIndex;

                    const active = url.includes(stage.slug);

                    return (
                        <li key={stage.id}>

                            <Link
                                href={
                                    isLocked
                                        ? "#"
                                        : route(
                                              `applications.${stage.slug}`,
                                              application.id
                                          )
                                }
                                className={`flex items-center justify-between px-3 py-2 rounded-md text-sm transition

                                    ${
                                        active
                                            ? "bg-green-700 text-white"
                                            : "text-gray-700 hover:bg-gray-100"
                                    }

                                    ${isLocked ? "opacity-50 cursor-not-allowed" : ""}
                                `}
                            >

                                {/* LEFT */}
                                <div className="flex items-center gap-2">

                                    {/* ICON */}
                                    <span>
                                        {isCompleted ? "✔" : isCurrent ? "●" : "🔒"}
                                    </span>

                                    <span>{stage.name}</span>
                                </div>

                                {/* RIGHT BADGE */}
                                {isCompleted && (
                                    <span className="text-xs bg-green-100 text-green-700 px-2 py-0.5 rounded">
                                        Done
                                    </span>
                                )}

                                {isCurrent && !isCompleted && (
                                    <span className="text-xs bg-blue-100 text-blue-700 px-2 py-0.5 rounded">
                                        Current
                                    </span>
                                )}
                            </Link>
                        </li>
                    );
                })}
            </ul>
        </aside>
    );
}

export default StageSidebar;

// import { Link } from "@inertiajs/react"
// import {usePage} from "@inertiajs/react"


// function StageSidebar({ stages = [], application }) {

//     if (!application?.id) return null;

//     const { url } = usePage();

//     return (
//         <aside className="w-64 bg-white border rounded-lg p-4">
//             <h3 className="font-semibold text-gray-700 mb-4">
//                 Application Steps
//             </h3>

//             <ul className="space-y-2">
//                 {(stages ?? []).map(stage => {
//                     if (!stage?.slug) return null;

//                     const active = url.includes(stage.slug);

//                     return (
//                         <li key={stage.id}>
//                             <Link
//                                 href={route(`applications.${stage.slug}`, application.id)}
//                                 className={`flex items-center justify-between px-3 py-2 rounded-md text-sm
//                                     ${active
//                                         ? 'bg-green-700 text-white'
//                                         : 'hover:bg-gray-100 text-gray-700'}
//                                 `}
//                             >
//                                 <span>{stage.name}</span>

//                                 {stage.pivot?.is_completed && (
//                                     <span className="text-xs bg-green-100 text-green-700 px-2 py-0.5 rounded">
//                                         ✓
//                                     </span>
//                                 )}
//                             </Link>
//                         </li>
//                     );
//                 })}
//             </ul>
//         </aside>
//     );
// }

// export default StageSidebar
